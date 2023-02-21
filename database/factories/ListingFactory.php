<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title=$this->faker->jobTitle();
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');
        return [
            'user_id'=>User::factory(),
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999),
            'salary' => (rand(1000, 4000)),
            'is_active' => true,
            'created_at' => $datetime,
            'updated_at' => $datetime
        ];
    }
}
