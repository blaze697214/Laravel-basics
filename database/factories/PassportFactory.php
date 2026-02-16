<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passport>
 */
class PassportFactory extends Factory
{
    // protected $model = Passport::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $two_letters = strtoupper($this->faker->lexify('##'));
        return [
            'passport_number' => $this->faker->numerify("$two_letters######"),
            'issuing_country' => $this->faker->country(),
            'expiry_date' => $this->faker->unique()->dateTimeBetween('+1 month','+2 years')
        ];
    }
}
