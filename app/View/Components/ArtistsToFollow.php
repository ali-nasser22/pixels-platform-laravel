<?php

namespace App\View\Components;

use App\Models\Profile;
use Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class ArtistsToFollow extends Component
{
    public function render(): View
    {

        if (Auth::check()) {
            $profile = Auth::user()->profile;
            $query = Profile::whereDoesntHave('followers', fn($q) => $q->where('follower_profile_id', $profile->id))
                ->where('id', '!=', $profile->id);

        } else {
            $query = Profile::query();
        }
        $profiles = $query->inRandomOrder()->take(4)->get();

        return view('components.artists-to-follow', compact('profiles'));
    }
}
