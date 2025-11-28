<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'profile_id'];

    public static function createLike(Profile $profile, Post $post): self
    {
        return static::firstOrCreate([
            'profile_id' => $profile->id,
            'post_id' => $post->id
        ]);
    }

    public static function undoLike(Profile $profile, Post $post): bool
    {
        return static::where('profile_id', $profile->id)
            ->where('post_id', $post->id)
            ->delete();
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
