<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    protected $model = Member::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateTime = $this->faker->dateTimeBetween('1 month ago', 'now');

        return [
            'full_name' => $this->faker->name(),
            'institution_id' => $this->faker->numberBetween(1, 3),
            'from' => $this->faker->randomElement([
                'Osis',
                'Pramuka',
                'Paskibra',
                'Palang merah remaja'
            ]), 
            'phonenumber' =>'+62' . $this->faker->numerify('##########'),
            'position' => $this->faker->jobTitle(),
            'address' => $this->faker->address(),
            'joining_date' => $dateTime->format('Y-m-d'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
