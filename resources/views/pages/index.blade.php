@extends('layouts.app')

@section('title', 'All Appointments')

@section('content')
{{-- Added the new custom style block with reusable animation keyframes and classes --}}
<style>
    /* 1. KEYFRAMES */
    @keyframes float {
        0%, 100% {
            /* Adjusted rotation for a softer paw movement */
            transform: translateY(0px) rotate(-10deg);
        }
        50% {
            transform: translateY(-8px) rotate(-5deg);
        }
    }

    @keyframes fade-in-up {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* KEYFRAME FOR DOG IMAGE: FADE-IN UG SCALE UP - More pronounced effect */
    @keyframes fade-in-scale {
        0% {
            opacity: 0;
            /* Slightly more dramatic lift/scale at start for Webflow feel */
            transform: translateY(30px) scale(0.9); 
        }
        100% {
            opacity: 1;
            transform: translateY(0) scale(1); 
        }
    }

    /* 2. ANIMATION CLASSES */
    .animate-float {
        animation: float 5s ease-in-out infinite;
    }
    /* Applied to the main content wrapper for initial page load animation */
    .animate-fade-up {
        animation: fade-in-up 0.8s cubic-bezier(0.19, 1, 0.22, 1) forwards; 
    }
    .animate-fade-scale {
        animation: fade-in-scale 1s cubic-bezier(0.19, 1, 0.22, 1) forwards; /* Slower, more impactful image animation */
    }

    .invisible-scroll {
        opacity: 0;
        transform: translateY(20px);
    }
</style>

{{-- Applied the new animation class to the main content wrapper --}}
<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-10 animate-fade-up">
        <div class="text-center mb-12 animate-fade-up">
                <p class="text-sm font-medium  uppercase tracking-widest mb-2">View</p>
                <h2 class="text-4xl md:text-5xl  text-gray-800">
                    Appointments
                </h2>
            </div>
    
    <!-- HEADER SECTION: Title and CTA Button -->
    <div class="flex flex-col px-10 sm:flex-row justify-between items-start sm:items-center mb-8 border-b border-gray-200 pb-4">
        <h1 class="text-3xl text-purple-600 tracking-tight">
            Clinic Appointments
        </h1>
        
        <!-- Add New Appointment Button (MIXING Bootstrap 'btn' with Tailwind styling) -->
        <a href="#" class="btn mt-4 sm:mt-0 px-6 py-3 bg-purple-600 text-white text-base font-semibold rounded-full shadow-lg shadow-purple-300/50 hover:bg-purple-700 transition duration-300 transform hover:scale-[1.02] flex items-center group">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Schedule New Appointment
        </a>
    </div>

    <!-- TABLE CONTAINER (MIXING Bootstrap 'card' with Tailwind styling) -->
    <div class="card bg-white shadow-2xl rounded-xl overflow-hidden ring-1 ring-gray-100">
        {{-- Bootstrap table-responsive wrapper for horizontal scrolling on small devices --}}
        <div class="table-responsive"> 
            
            {{-- Check if appointments were passed and if the collection is not empty --}}
            @if (isset($appointments) && $appointments->count() > 0)
                {{-- Bootstrap 'table' and 'table-hover' classes combined with Tailwind sizing --}}
                <table class="table table-hover min-w-full divide-y divide-gray-200">
                    <thead class="bg-purple-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">
                                Pet Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider hidden md:table-cell">
                                Owner
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">
                                Vet
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider hidden lg:table-cell">
                                Specialty
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">
                                Date & Time
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider hidden sm:table-cell">
                                Reason
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-semibold text-purple-800 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach ($appointments as $appointment)
                            <tr class="hover:bg-purple-50 transition duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                    {{ $appointment->id }}
                                </td>
                                {{-- Display Pet relationship data --}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold">
                                    {{ $appointment->pet->name ?? 'N/A' }} 
                                    <span class="text-xs text-purple-600 block">{{ $appointment->pet->species ?? 'N/A' }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 hidden md:table-cell">
                                    {{ $appointment->pet->owner_name ?? 'N/A' }}
                                </td>
                                {{-- Display Vet relationship data --}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $appointment->vet->name ?? 'N/A' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-purple-700 hidden lg:table-cell">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        {{ $appointment->vet->specialization ?? 'N/A' }}
                                    </span>
                                </td>
                                {{-- Use the Carbon object for formatting --}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $appointment->appointment_date->format('M d, Y') }}
                                    <span class="text-xs text-gray-500 block">{{ $appointment->appointment_date->format('h:i A') }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">
                                    {{ \Illuminate\Support\Str::limit($appointment->reason, 40) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    {{-- Using 'btn-sm' (Bootstrap) alongside custom Tailwind styling --}}
                                    <a href="{{ route('pets.show', $appointment->pet->id) }}" 
                                       class="btn-sm text-purple-600 hover:text-purple-800 transition duration-150 p-2 border border-purple-300 rounded-lg hover:bg-purple-100/70 text-xs sm:text-sm whitespace-nowrap">
                                        View Pet
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <!-- Empty State Message (Purple Themed) -->
                <div class="p-12 text-center animate-fade-up bg-gray-50/50">
                    <svg class="mx-auto h-16 w-16 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">No Appointments Scheduled Yet</h3>
                    <p class="mt-2 text-md text-gray-600">
                        Get started by scheduling your first visit or populating your database.
                    </p>
                    {{-- MIXING Bootstrap 'btn' with Tailwind styling --}}
                    <a href="#" class="btn mt-6 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-300">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Log in for Appointment
                    </a>
                </div>
            @endif
        </div>
        
    </div>
</div>
@endsection
