<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->name,
            'first_name' => $this->faker->name,
            'email' => $this->faker->safeEmail(),
            'no-1' => $this->faker->randomNumber(3),
            'no-2' => $this->faker->randomNumber(4),
            'no-3' => $this->faker->randomNumber(4),
            'address'=> $this->faker->city(),
        ];
    }
}
