<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of all appointments.
     * This serves as the main Index Page for the application records.
     * It uses Eloquent relationships to retrieve Pet and Vet data.
     */
    public function index()
    {
        // 1. Retrieve all appointments.
        // Eager load the 'pet' and 'vet' relationships to prevent N+1 query problems.
        $appointments = Appointment::with(['pet', 'vet'])
                            ->orderBy('appointment_date', 'desc')
                            ->get(); 

        // 2. Pass the data to the appointments index view (pages/index.blade.php).
        // return view('pages.index', [
        //     'appointments' => $appointments
        // ]);
        return view('pages.index', compact('appointments'));
    }
    
    // You would add methods like 'create', 'store', 'show', 'edit', 'update', and 'destroy' here.
}
