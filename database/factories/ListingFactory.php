<?php

namespace Database\Factories;

use App\Models\User;
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
        return [
            'title' => $this->faker->sentence(3),
            'user_id'=> User::get()->random()->id,
            'tags'=>'laravel, api, backend',
            'location'=>$this->faker->city(),
            'website'=>$this->faker->url(),
            'company'=>$this->faker->company(),
            'email'=>$this->faker->companyEmail(),
            'description'=>$this->faker->paragraph(2)
        ];
    }
}
