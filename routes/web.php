<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/feed", function () {
    $feedItems = json_decode(json_encode([
        [
            'profile' => [
                'avatar' => 'images/michael.png',
                'display' => 'Michael',
                'handle' => '@mmich_jj'
            ],
            'postedDateTime' => '30 mins ago',
            'content' => sprintf(
                '<p>I made this! <a>#myartwork</a> <a>#pixel</a></p><img alt="pic-from-michael" src="%s">',
                asset('images/simon-chilling.png')
            ),
            'likeCount' => 32,
            'replyCount' => 21,
            'repostCount' => 11,
        ],
    ]));
    return view("feed", compact('feedItems'));
});

Route::get("/profile", function () {
    $feedItems = json_decode(json_encode([
        [
            'profile' => [
                'avatar' => 'images/michael.png',
                'display' => 'Michael',
                'handle' => '@mmich_jj'
            ],
            'postedDateTime' => '30 mins ago',
            'content' => sprintf(
                '<p>I made this! <a>#myartwork</a> <a>#pixel</a></p><img alt="pic-from-michael" src="%s">',
                asset('images/simon-chilling.png')
            ),
            'likeCount' => 32,
            'replyCount' => 21,
            'repostCount' => 11,
        ],
    ]));
    return view('profile', compact('feedItems'));
});
