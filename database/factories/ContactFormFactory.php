<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $age = $this->faker->numberBetween(1, 10);
        $gender = $this->faker->numberBetween(1, 3);

        return [
            'username' => $this->faker->username(20),
            'userid' => $this->faker->postcode(),   //便宜上、郵便番号入れちゃう
            'email' => $this->faker->email(),
            'age' => $age,
            'gender' => $gender,
            'pstartage' => $this->faker->numberBetween(1, 10),
            'totalhistory' => $this->faker->numberBetween(1, 9),
            'pianohon' => $this->faker->numberBetween(1, 5),
            'soundproofhon' => $this->faker->boolean(),
            'community' => $this->faker->realText(25),
            'age_id' => $age,
            'gender_id' => $gender,
        ];
    }
}
