<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
// import Pet and Vet models 
use App\Models\Pet;
use App\Models\Vet;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;
    
    public function definition(): array
    {
        return [
            'pet_id' => Pet::factory(),
            'vet_id' => Vet::factory(),
            'appointment_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'reason' => $this->faker->sentence(),
        ];
    }
}
