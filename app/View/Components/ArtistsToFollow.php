<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ArtistsToFollow extends Component
{
    public function render(): View
    {
        $artists = [
            ['img' => 'alessia.png', 'name' => 'alessia_draws'],
            ['img' => 'anne.png', 'name' => 'just_Anne'],
            ['img' => 'mr-anderson.png', 'name' => 'Mr.Anderson'],
            ['img' => 'michael.png', 'name' => 'Michael'],
        ];
        return view('components.artists-to-follow', compact('artists'));
    }
}
