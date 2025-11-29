<?php

namespace App\View\Components;

use App\Models\Post as PostModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{

    private PostModel $original;

    public function __construct(
        public PostModel $post,
        public bool $showEngagement = true,
        public bool $showReplies = false
    ) {
        $this->original = $post;
        $this->post = $post->isRepost() && $post->content == null ? $post->repostOf : $post;
    }

    public function render(): View
    {
        return view('components.post');
    }
}
