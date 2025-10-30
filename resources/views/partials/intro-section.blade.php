<section class="py-24 px-6 md:px-12 bg-gray-50">
    <div class="container mx-auto max-w-7xl text-center">

        <div class="mb-16"
             x-data="{ visible: true }" x-intersect.once="visible = true" 
             :class="{ 'opacity-100 translate-y-0': visible, 'invisible-scroll': !visible }"
             class="transition duration-700">
            <p class="text-sm font-medium text-gray-500 uppercase tracking-widest mb-2">Intro</p>
            <h2 class="text-4xl md:text-5xl  text-gray-800">
                Get to know us more
            </h2>
        </div>
        
        <div class="grid grid-cols-3 mda:grid-cols-3 gap-12 lg:gap-8">
            
            <div x-data="{ card1: true }" x-intersect.once.margin.100px="card1 = true" 
                 :class="{ 'opacity-100 translate-y-0': card1, 'invisible-scroll': !card1 }"
                 class="transition duration-700 delay-200 flex flex-col items-center p-6 hover:shadow-lg rounded-xl">
                
                <div class="w-24 h-24 flex items-center justify-center rounded-full" 
                    style="background-color: #fcecd7;"> 
                    {{-- <i data-lucide="home" class="w-10 h-10 text-orange-400" style="stroke-width: 1.5;"></i> --}}
                    <img src="{{ asset('images/house.png') }}"
                    class="w-13 h-12"
                    >
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mt-6 mb-2">Pet Experts</h3>
                <p class="text-gray-500 mb-6 max-w-[250px]">
                    Pets Webflow eCommerce Template is a modern
                </p>
                <a href="#" class="px-6 py-2 border rounded-full font-medium transition duration-200" 
                    style="border-color: #f9b756; color: #f9b756; background-color: #fffaf0; hover:background-color: #fcecd7;">
                    Read More
                </a>
            </div>

            <div x-data="{ card2: true }" x-intersect.once.margin.100px="card2 = true" 
                 :class="{ 'opacity-100 translate-y-0': card2, 'invisible-scroll': !card2 }"
                 class="transition duration-700 delay-300 flex flex-col items-center p-6 hover:shadow-lg rounded-xl">
                
                <div class="w-24 h-24 flex items-center justify-center rounded-full" 
                    style="background-color: #e2f5f7;"> 
                    {{-- <i data-lucide="bone" class="w-10 h-10 text-cyan-500" style="stroke-width: 1.5;"></i> --}}
                    <img src="{{ asset('images/vet-icon.png') }}"
                    class="w-15 h-23"
                    >
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mt-6 mb-2">Vet Services</h3>
                <p class="text-gray-500 mb-6 max-w-[250px]">
                    Pets Webflow eCommerce Template is a modern
                </p>
                <a href="#" class="px-6 py-2 border rounded-full font-medium transition duration-200" 
                    style="border-color: #4aa0b8; color: #4aa0b8; background-color: #f0faff; hover:background-color: #e2f5f7;">
                    Read More
                </a>
            </div>

            <div x-data="{ card3: true }" x-intersect.once.margin.100px="card3 = true" 
                 :class="{ 'opacity-100 translate-y-0': card3, 'invisible-scroll': !card3 }"
                 class="transition duration-700 delay-500 flex flex-col items-center p-6 hover:shadow-lg rounded-xl">
                
                <div class="w-24 h-24 flex items-center justify-center rounded-full" 
                    style="background-color: #f7e6e7;"> 
                    {{-- <i data-lucide="message-square" class="w-10 h-10 text-pink-500" style="stroke-width: 1.5;"></i> --}}
                     <img src="{{ asset('images/plate.png') }}"
                    class="w-13 h-10"
                    >
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mt-6 mb-2">Contact Us</h3>
                <p class="text-gray-500 mb-6 max-w-[250px]">
                    Pets Webflow eCommerce Template is a modern
                </p>
                <a href="#" class="px-6 py-2 border rounded-full font-medium transition duration-200" 
                    style="border-color: #e96b73; color: #e96b73; background-color: #fffafa; hover:background-color: #f7e6e7;">
                    Read More
                </a>
            </div>

        </div>
    </div>
</section>