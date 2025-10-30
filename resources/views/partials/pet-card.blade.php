<style>
    /* 1. KEYFRAMES */
    @keyframes float {
        0%, 100% {
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

    /* KEYFRAME FOR CARDS: FADE-IN AND SCALE UP - More pronounced effect */
    @keyframes fade-in-scale {
        0% {
            opacity: 0;
            transform: translateY(30px) scale(0.95); 
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
        /* Used for the overall section header */
        animation: fade-in-up 0.8s cubic-bezier(0.19, 1, 0.22, 1) forwards; 
    }
    .animate-fade-scale {
        /* Used for the individual cards with staggering */
        animation: fade-in-scale 1s cubic-bezier(0.19, 1, 0.22, 1) forwards;
    }

    /* Utility class to hide elements before animation starts */
    .invisible-element {
        opacity: 0;
    }
</style>

{{-- 🐶 Section 1: Hero Section (Shop in our Pet Store) --}}
    <div class="relative overflow-hidden" style="background-color: #ffff; min-height: 70vh;">
        <div class="container mx-auto flex flex-col md:flex-row items-center">

           
    </div>

    <hr class="border-t border-gray-100">

    {{-- 👨‍⚕️ Section 2: Our Team/Vets Section --}}
    <section id="our-vets" class="py-16 mt-20 md:py-24" style="background-color:;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Title Block --}}
            <div class="text-center mb-12">
                <p class="text-sm font-medium  uppercase tracking-widest mb-2">Team</p>
                <h2 class="text-4xl md:text-5xl  text-gray-800">
                    Our Pets
                </h2>
            </div>

            {{-- Team Card Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Card 1: Dr. Sergey Atov (CEO) --}}
                <div class="flex flex-col items-center text-left p-0 bg-white 
                            transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                    
                    <div class="w-full relative mb-4 overflow-hidden" style="background-color: #add8e6; padding-top: 100%;">
                        {{-- NOTE: Image path needs to be updated --}}
                        <img src="{{ asset('images/man-pet.png') }}" alt="Dr. Sergey Atov" 
                             class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    </div>

                    <div class="w-full p-4">
                        <h3 class="text-xl font-bold text-gray-800 leading-snug">
                            Cats
                        </h3>
                        <p class="text-lg text-gray-500 font-normal mt-1">
                            CEO
                        </p>
                        <p class="text-base text-gray-600 mt-2">
                            Awarded dermatologist of our city with 13 years of experience.
                        </p>
                    </div>
                </div>

                {{-- Card 2: Dr. Sergey Atov (CFO) --}}
                <div class="flex flex-col items-center text-left p-0 bg-white 
                            transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                    
                    <div class="w-full relative mb-4 overflow-hidden" style="background-color: #add8e6; padding-top: 100%;">
                        {{-- NOTE: Image path needs to be updated --}}
                        <img src="{{ asset('images/man-pet.png') }}" alt="Dr. Sergey Atov" 
                             class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    </div>

                    <div class="w-full p-4">
                        <h3 class="text-xl font-bold text-gray-800 leading-snug">
                            Dogs
                        </h3>
                        <p class="text-lg text-gray-500 font-normal mt-1">
                            CFO
                        </p>
                        <p class="text-base text-gray-600 mt-2">
                            Awarded dermatologist of our city with 13 years of experience.
                        </p>
                    </div>
                </div>

                {{-- Card 3: Dr. Sergey Atov (CTO) --}}
                <div class="flex flex-col items-center text-left p-0 bg-white 
                            transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                    
                    <div class="w-full relative mb-4 overflow-hidden" style="background-color: #add8e6; padding-top: 100%;">
                        {{-- NOTE: Image path needs to be updated --}}
                        <img src="{{ asset('images/man-pet.png') }}" alt="Dr. Sergey Atov" 
                             class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    </div>

                    <div class="w-full p-4">
                        <h3 class="text-xl font-bold text-gray-800 leading-snug">
                            Amphbians
                        </h3>
                        <p class="text-lg text-gray-500 font-normal mt-1">
                            CTO
                        </p>
                        <p class="text-base text-gray-600 mt-2">
                            Awarded dermatologist of our city with 13 years of experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>