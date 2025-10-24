<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pet;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{

    // tell the laravel which model this factory is for; 
     protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'name' =>$this->faker->firstName(),
            'species' => $this->faker->randomElement(['Dog', 'Cat', 'Bird', 'Reptile', 'Other']),
            'owner_name' =>$this->faker->name(),
        ];
    }
}
