<?php

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


test('allows a profile to publish a post', function () {
    $profile = Profile::factory()->create();
    $post = Post::publish($profile, "My First Post. YOHO");

    expect($post->exists())->toBeTrue()
        ->and($post->profile->is($profile))->toBeTrue()
        ->and($post->parent_id)->toBeNull()
        ->and($post->repost_of_id)->toBeNull();
});

test('can reply to post', function () {
    $original = Post::factory()->create();
    $replier = Profile::factory()->create();
    $reply = Post::reply($replier, $original, 'Great Work G.');

    expect($reply->parent_id)->toBe($original->id);

    $original->refresh();

    expect($original->replies)->toHaveCount(1)
        ->and($original->replies->first()->id)->toBe($reply->id);
});

test('can has many replies to post', function () {
    $original = Post::factory()->create();
    $replies = Post::factory(4)->reply($original)->create();
    expect($replies->first()->parent_id)->toBe($original->id);

    $original->refresh();

    expect($original->replies)->toHaveCount(4)
        ->and($original->replies->first()->id)->toBe($replies->first()->id);
});

test('can repost to post', function () {
    $original = Post::factory()->create();
    $repostProfile = Profile::factory()->create();
    $repost = Post::repost($repostProfile, $original);

    expect($repost->repostOf->id)->toBe($original->id);

    $original->refresh();

    expect($original->reposts)->toHaveCount(1)
        ->and($original->reposts->first()->id)->toBe($repost->id)
        ->and($repost->content)->toBeNull();
});


test('can has many reposts to post', function () {
    $original = Post::factory()->create();
    $reposts = Post::factory(4)->repost($original)->create();
    expect($reposts->first()->repost_of_id)->toBe($original->id);

    $original->refresh();

    expect($original->reposts)->toHaveCount(4)
        ->and($original->reposts->first()->id)->toBe($reposts->first()->id);
});


test('can quote repost to post', function () {
    $original = Post::factory()->create();
    $repostProfile = Profile::factory()->create();
    $content = "That's Exactly it!!!";
    $repost = Post::repost($repostProfile, $original, $content);

    expect($repost->repostOf->id)->toBe($original->id);

    $original->refresh();

    expect($original->reposts)->toHaveCount(1)
        ->and($original->reposts->first()->id)->toBe($repost->id)
        ->and($repost->content)->toBe($content);
});


test('prevent duplicate reposts', function () {
    $original = Post::factory()->create();
    $profile = Profile::factory()->create();

    $r1 = Post::repost($profile, $original);
    $r2 = Post::repost($profile, $original);

    expect($r1->id)->toBe($r2->id);
});

test('remove a repost', function () {
    $original = Post::factory()->create();
    $profile = Post::factory()->repost($original)->create()->profile;
    $success = Post::undoRepost($profile, $original);

    expect($original->reposts)->toHaveCount(0)
        ->and($success)->toBeTrue();
});
