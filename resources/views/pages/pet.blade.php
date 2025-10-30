@extends('layouts.app')

@section('content')

<!-- Note: I fixed the CDN URLs that were in brackets in your previous file. -->
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 

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

<!-- ============================================== -->
<!-- NAV BAR (FIXED AND SLIGHTLY IMPROVED) -->
<!-- ============================================== -->
{{-- <nav x-data="{ scrolled: false }" 
     x-on:scroll.window="scrolled = window.scrollY > 100"
     :class="{ 
        'shadow-xl': scrolled, 
        'shadow-sm': !scrolled
     }"
     class="fixed top-0 left-0 w-full z-50 
            transition-all duration-300 ease-in-out 
            bg-white/95 backdrop-blur-md px-6 md:px-12 lg:px-20 py-4 
            /* Ensures navbar fades in quickly */
            opacity-0 animate-fade-up transform translate-y-0" 
            style="animation-delay: 0.1s;">
     
    <div class="flex justify-between items-center w-full max-w-7xl mx-auto"> 
        <div class="text-2xl font-bold text-purple-800">
            VetSync<span class="text-purple-400">.</span>
        </div>

        <ul class="hidden lg:flex space-x-8 text-gray-700 font-medium">
            <li><a href="#" class="hover:text-purple-600 transition duration-200">Home</a></li>
            <li><a href="#mission-statement" class="hover:text-purple-600 transition duration-200">About Us</a></li>
            <li><a href="#" class="hover:text-purple-600 transition duration-200">Services</a></li>
            <li><a href="#" class="hover:text-purple-600 transition duration-200">Contact Us</a></li>
        </ul>

        <div class="flex items-center space-x-4">
            <a href="#" class="hidden sm:block text-purple-600 hover:text-purple-800 transition duration-200">
                <i data-lucide="shopping-cart" class="w-6 h-6"></i>
            </a>

            <!-- Smoother CTA button -->
            <a href="#" class="flex items-center bg-purple-600 text-white px-4 py-2 rounded-full font-semibold space-x-2 
                        transition duration-300 ease-in-out hover:bg-purple-700 hover:shadow-lg">
                <i data-lucide="calendar-plus" class="w-5 h-5"></i>
                <span>Book Appointment</span>
            </a>
        </div>
    </div>
</nav> --}}
<!-- Padding for the fixed navbar -->
<div class="h-[80px]"></div> 

<!-- ============================================== -->
<!-- HERO SECTION (WEBFLOW REPLICATION) -->
<!-- ============================================== -->
<section class="relative bg-white overflow-hidden">
    
    <!-- TOP BACKGROUND COLOR BLOCK (Soft Lilac/Pink-Purple) -->
    <div class="absolute left-0 top-0 w-full h-[85%]" style="background-color: #e9e4f5;"></div>
    
    <!-- CURVED WHITE BASE - Added shadow for depth -->
    <div class="absolute bottom-0 left-0 w-full h-1/6">
        <!-- The curve itself, slightly raised -->
        <div class="absolute bottom-0 left-0 w-full h-full bg-white rounded-t-[100px] md:rounded-t-[150px] shadow-2xl shadow-purple-100"></div>
    </div>

    <!-- PAW PRINT (FLOAT ANIMATION) -->
    <img src="{{ asset('images/paw.png') }}" 
        alt="Large Paw Print" 
        class="absolute top-1/4 left-0 md:left-10 lg:left-20 w-40 md:w-56 opacity-20 rotate-[-10deg] z-10 animate-float"
        style="opacity: 0.4; color: #d1c8e3; animation-delay: 0.3s; pointer-events: none;">


    <div class="container mx-auto max-w-7xl flex flex-col md:flex-row items-center justify-between px-6 md:px-12 lg:px-20 py-24 relative z-20">
        
        <div class="max-w-xl text-center md:text-left">
            
            <!-- 1. WELCOME BADGE (0.3s) - Adjusted color for better contrast/aesthetic -->
            <span class="px-3 py-1 rounded-full text-sm font-semibold inline-block opacity-0 animate-fade-up" 
                  style="background-color: #9f7aea; color: white; animation-delay: 0.3s;">
                Vets 
            </span>
            
            <!-- 2. HEADLINE (0.5s) - New text, softer purple -->
            <h1 class="text-6xl lg:text-7xl font-extrabold mt-4 leading-tight tracking-tight opacity-0 animate-fade-up" 
                style="color: #6b46c1; animation-delay: 0.5s;">
                Your Trusted Pet Doctors
            </h1>
            
            <!-- 3. PARAGRAPH (0.7s) - New supporting text -->
            <p class="mt-6 text-xl text-gray-600 opacity-0 animate-fade-up" style="animation-delay: 0.7s;">
                 Book appointments, manage records, and connect with your vet—all in one seamless platform.
            </p>

            <!-- 4. CTA BUTTON (0.9s) - Bolder primary button -->
            <a href="/appointments"
                class="group relative inline-flex items-center justify-center mt-8 overflow-hidden 
                        rounded-full px-8 py-4 font-bold text-white 
                        bg-purple-600 shadow-xl shadow-purple-300/60
                        transition-all duration-300 ease-out hover:bg-purple-700 hover:shadow-purple-400/80 hover:scale-[1.05] opacity-0 animate-fade-up"
                        style="animation-delay: 0.9s;">
                
                <span class="relative z-10">Schedule Your Pet's Visit</span>

                {{-- <span class="relative z-10 ml-3 flex items-center justify-center w-8 h-8 rounded-full 
                              bg-white/20 group-hover:bg-white/30 transition-all duration-300">
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </span> --}}
                  <span class="relative z-10 ml-3 flex items-center justify-center w-8 h-8 rounded-full 
                              bg-purple-400/30 group-hover:bg-purple-500/40 transition-all duration-300">
                    <svg class="w-4 h-4 text-white group-hover:translate-x-1 transition-transform duration-300" 
                               fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </span>

            </a>
            
        </div>

        <div class="relative mt-12 md:mt-0 md:w-1/2 flex justify-center md:justify-end">
            <!-- 5. DOG IMAGE (1.1s) - ANIMATED WITH FADE-SCALE. Added negative margin (-mb-20) to overlap the curve for the Webflow effect. -->
            <img src="{{ asset('images/man-pet.png') }}" 
                alt="Pet Doctor Dog" 
                class="w-[420px] md:w-[500px] lg:w-[580px] relative z-10 object-contain 
                       opacity-0 animate-fade-scale transition duration-700 -mb-20"
                style="animation-delay: 1.1s;">
        </div>

    </div>
    
    <!-- 6. CONTACT CHIP (1.3s) - Adjusted vertical position and style -->
    <div class="absolute bottom-12 right-1/2 translate-x-1/2 md:translate-x-0 md:bottom-20 md:right-32 z-30 flex items-center space-x-3 bg-white p-3 rounded-full shadow-2xl shadow-gray-200 
                 opacity-0 animate-fade-up" 
                 style="animation-delay: 1.3s;">
        <i data-lucide="stethoscope" class="w-5 h-5 text-purple-600"></i>
        <p class="text-gray-700 font-medium whitespace-nowrap text-sm">
            Emergency Line: <span class="text-purple-700 font-bold">800-236-789</span>
        </p>
    </div>

    <!-- Scroll Down Arrow (Positioned over the curve) -->
    <a href="#mission-statement" class="absolute bottom-6 right-8 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-purple-500/30 text-white/80 transition hover:bg-purple-500/50">
        <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </a>

</section>

@include('partials.pet-card')


{{-- <section id="next-section" class="h-96 bg-purple-400 py-24 px-6 md:px-12 flex items-center justify-center"> --}}
    {{-- <h2 class="text-3xl text-gray-600 font-bold">This is the next section content!</h2> --}}
    
{{-- </section> --}}


@endsection