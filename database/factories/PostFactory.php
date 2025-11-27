<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'parent_id' => null,
            'content' => $this->faker->realText(65),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function reply(Post $parentPost): PostFactory
    {
        return $this->state([
            'parent_id' => $$parentPost->id,
            'content' => $this->faker->realText(15)
        ]);
    }
}
