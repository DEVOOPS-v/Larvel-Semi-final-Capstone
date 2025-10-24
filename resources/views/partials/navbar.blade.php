    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 

    <style>
        /* 1. Link Hover Underline Animation */
        .nav-link {
            position: relative;
            padding-bottom: 2px; /* Space for the underline */
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #7c3aed; /* purple-600 */
            transition: width 0.3s ease-in-out;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>

    <nav x-data="{ scrolled: false, intro: true }" 
        x-init="setTimeout(() => { intro = false }, 100)"
        x-on:scroll.window="scrolled = window.scrollY > 100"
        :class="{ 
            // 1. INTRO FADE (Initial state for 100ms): Invisible at the top
            'opacity-0 transform -translate-y-0': intro, 

            // // 2. SCROLL REVEAL LOGIC: Applied after intro is false
            'transform translate-y-0 opacity-100 shadow-xl': scrolled && !intro, 
            'transform -translate-y-full opacity-0': !scrolled && intro
        }"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out bg-white/95 backdrop-blur-md px-60 py-8">
        
        <div class="flex justify-between items-center w-full"> 
            <div class="text-2xl font-bold text-purple-800">
                VetSync<span class="text-gray-400">.</span>
            </div>

            <ul class="flex space-x-8 text-gray-700 font-medium">
                <li><a href="#" class="hover:text-purple-600 nav-link">Home</a></li>
                <li><a href="#mission-statement" class="hover:text-purple-600 nav-link">About Us</a></li>
                <li><a href="#" class="hover:text-purple-600 nav-link">Contact Us</a></li>
            </ul>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-purple-600 hover:text-purple-800 transition duration-200">
                    <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                </a>

                <div class="flex items-center bg-purple-100 px-4 py-2 rounded-full text-purple-800 font-semibold space-x-2 
                            transition duration-300 ease-in-out hover:bg-purple-200 hover:scale-[1.05] cursor-pointer">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    <span>800-234-567</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="h-20"></div> 

    <script>
        lucide.createIcons();
    </script>