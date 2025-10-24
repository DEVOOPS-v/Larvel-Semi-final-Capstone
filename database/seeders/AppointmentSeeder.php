<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Pet;
use App\Models\Vet;
class AppointmentSeeder extends Seeder
{
    
    public function run(): void
    {
        $pets = Pet::all();
        $vets = Vet::all();

        if($pets->count() === 0 || $vets->count() === 0) {
            // No pets or vets to associate appointments with
            $this->command->warn('No pets or vets foound.');
            return;
        }

        foreach(range(1,10) as $i) {
            Appointment::create([
                'pet_id' => $pets->random()->id,
                'vet_id' => $vets->random()->id,
                'appointment_date' => now()->addDays(rand(1, 30)),
                'reason' => 'Regular check-up',
            ]);
        }
    }
}
