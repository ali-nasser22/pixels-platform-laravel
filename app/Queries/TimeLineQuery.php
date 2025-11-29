<?php

namespace App\Queries;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TimeLineQuery
{

    public function __construct(private Profile $viewer)
    {
    }

    public static function forViewer(Profile $viewer): self
    {
        return new self($viewer);
    }

    public function paginate(int $perPage = 20): LengthAwarePaginator
    {

        return $this->baseQuery()->paginate($perPage)->through(fn($p) => $this->normalize($p));

    }

    public function baseQuery(): EloquentBuilder
    {
        $followingIds = $this->viewer->followings()
            ->pluck('following_profile_id')
            ->prepend($this->viewer->id);

        return Post::whereIn('profile_id', $followingIds)
            ->whereNull('parent_id')
            ->with([
                'profile', 'repostOf' => fn($q) => $q->withCount('likes', 'replies', 'repostOf')
                    ->with('profile')
            ])
            ->withCount(['likes', 'replies', 'reposts'])
            ->withExists([
                'likes as has_liked' => fn($q) => $q->where('profile_id', $this->viewer->id),
                'reposts as has_reposted' => fn($q) => $q->where('profile_id', $this->viewer->id),
                'repostOf as like_original' => fn($q) => $q->whereHas('likes',
                    fn($q) => $q->where('profile_id', $this->viewer->id)),
                'repostOf as repost_original' => fn($q) => $q->whereHas('reposts',
                    fn($q) => $q->where('profile_id', $this->viewer->id))
            ])->latest();
    }

    private function normalize(Post $post): Post
    {
        if ($post->isRepost() && is_null($post->content)) {
            $post->repostOf->has_liked = (bool) $post->like_orginal;
            $post->repostOf->has_reposted = (bool) $post->repost_orginal;
        }

        return $post;
    }

    public function get(): Collection
    {
        return $this->baseQuery()->get()->map(fn($p) => $this->normalize($p));
    }


}
