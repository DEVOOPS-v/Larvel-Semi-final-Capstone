<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vet;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vet>
 */
class VetFactory extends Factory
{
    protected $model = Vet::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'specialization' => $this->faker->randomElement(['General Practice', 'Surgery', 'Dentistry', 'Dermatology', 'Emergency Medicine']),
        ];
    }
}
