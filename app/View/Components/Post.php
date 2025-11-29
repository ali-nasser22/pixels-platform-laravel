<?php

namespace App\View\Components;

use App\Models\Post as PostModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{

    public function __construct(
        public PostModel $post,
        public bool $showEngagement = true,
        public bool $showReplies = false
    ) {


    }

    public function render(): View
    {
        return view('components.post');
    }
}
