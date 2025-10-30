<section id="our-vets" class="py-16 md:py-24" style="background-color: #f0f8ff;">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <p class="text-sm font-medium text-gray-500 uppercase tracking-widest mb-2">Team</p>
            <h2 class="text-4xl md:text-5xl  text-gray-800">
                Get to know our vets
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-35 ">

            {{-- Card 1 --}}
            {{-- Flat Design Animation: subtle lift and image zoom, NO shadows or borders --}}
            <div class="flex flex-col items-center text-left p-0 bg-white 
                        transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                
                <div class="w-full relative mb-4 overflow-hidden" style="background-color: #f7f3e5; padding-top: 100%;">
                    {{-- Image zoom on hover --}}
                    <img src="{{ asset('images/card-3.jpg') }}" alt="Dr. Clifford Tor" 
                         class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute top-4 right-4 bg-black text-white text-xs font-bold px-3 py-1 rounded-full">-30%</span>
                </div>

                <div class="w-full p-4">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug">
                        Dr. Clifford Tor
                    </h3>
                    <p class="text-lg text-gray-500 font-normal mt-1">
                        CEO
                    </p>
                    <p class="text-base text-gray-600 mt-2">
                        Awarded dermatologist of our city with 13 years of experience.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="flex flex-col items-center text-left p-0 bg-white 
                        transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                
                <div class="w-full relative mb-4 overflow-hidden" style="background-color: #e5d8c8; padding-top: 100%;">
                    <img src="{{ asset('images/card-1.png') }}" alt="Dr. Jasmin Lincoln" 
                         class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                </div>

                <div class="w-full p-4">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug">
                        Dr. Jasmin Lincoln
                    </h3>
                    <p class="text-lg text-gray-500 font-normal mt-1">
                        CEO
                    </p>
                    <p class="text-base text-gray-600 mt-2">
                        Awarded dermatologist of our city with 13 years of experience.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="flex flex-col items-center text-left p-0 bg-white 
                        transform transition duration-300 ease-in-out hover:-translate-y-2 group">
                
                <div class="w-full relative mb-4 overflow-hidden" style="background-color: #c8d8e5; padding-top: 100%;">
                    <img src="{{ asset('images/card-2.jpg') }}" alt="Dr. Ana Roosevelt" 
                         class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-[1.03]">
                </div>

                <div class="w-full p-4">
                    <h3 class="text-xl font-bold text-gray-800 leading-snug">
                        Dr. Ana Roosevelt
                    </h3>
                    <p class="text-lg text-gray-500 font-normal mt-1">
                        CEO
                    </p>
                    <p class="text-base text-gray-600 mt-2">
                        Awarded dermatologist of our city with 13 years of experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>  