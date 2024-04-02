<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->domainName,
            'description' => $this->faker->text,
            'income' => $this->faker->numberBetween(10000, 1000000), // เลขสุ่มในช่วง 10,000 ถึง 1,000,000
            'total_assets' => $this->faker->numberBetween(100000, 10000000), // เลขสุ่มในช่วง 100,000 ถึง 10,000,000
            
        ];
    }
}
