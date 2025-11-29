<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        $handle = $this->faker->unique()->userName();
        return [
            'user_id' => User::factory(),
            'display_name' => $this->faker->name(),
            'handle' => $handle,
            'bio' => $this->faker->sentences(2, true),
            'avatar_url' => 'http://dummyimage.com/90x90/eee/000',
            'cover_url' => 'http://dummyimage.com/1400x640/555/ECA749?text='.$handle,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
