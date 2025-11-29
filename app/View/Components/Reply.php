<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Reply extends Component
{

    public function __construct(public Post $item, public bool $showEngagement = true, public $showReplies = false)
    {
    }

    public function render(): View
    {
        return view('components.reply');
    }
}
