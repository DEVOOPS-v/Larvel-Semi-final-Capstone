<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
        public function index() {
            $pets = Pet::orderBy('owner_name')->get();

            // alternatice for comcpact, this serves to pass the variable to the blade. 
            
            return view('pages.pet', ['pet' => $pets
        ]);
    }
}
