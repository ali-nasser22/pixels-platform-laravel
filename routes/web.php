<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

function getFeedItems(): mixed
{
    return json_decode(json_encode([
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
            'replies' => [
                [
                    'profile' => [
                        'avatar' => 'images/mr-anderson.png',
                        'display' => 'Mr.Anderson',
                        'handle' => '@mr_anderson'
                    ],
                    'postedDateTime' => '12 mins ago',
                    'content' => '<p>What A Great Work My Friend!</p>',
                    'likeCount' => 3,
                    'replyCount' => 2,
                    'repostCount' => 1,
                ]
            ]
        ],
    ]));
}

Route::get("/feed", function () {
    $feedItems = getFeedItems();
    return view("feed", compact('feedItems'));
});

Route::get("/profile", function () {
    $feedItems = getFeedItems();
    return view('profile', compact('feedItems'));
});
