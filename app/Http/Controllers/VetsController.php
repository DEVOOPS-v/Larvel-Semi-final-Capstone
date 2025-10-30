<?php

namespace App\Http\Controllers;

use App\Models\Vet;
use Illuminate\Http\Request;

class VetsController extends Controller
{
    /**
     * Display a listing of all Vets.
     * This method fetches all vets and prepares the data for the Vets Index Page.
     */
    public function index()
    {
        // 1. Retrieve all Vets from the database
        $vets = Vet::orderBy('name')->get(); 

        // 2. Pass the Vets data to the view
        // We will create a new view file named 'pages.vets'
        return view('pages.vet', [
            'vet' => $vets
        ]);
    }
}
