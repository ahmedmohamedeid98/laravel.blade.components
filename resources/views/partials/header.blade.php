<header class="bg-gray-700 text-white py-4 px-6" x-data="{open : false}">
    <div class="flex justify-between items-center">
        
        <h1 class="font-bold tracking-widest uppercase">Laracast</h1>
        <nav class="hidden md:flex">
            <x-nav-link route="home">Home</x-nav-link>
            <x-nav-link route="about">About</x-nav-link>
            <x-nav-link route="testimonials">Testimonials</x-nav-link>
            <x-nav-link route="contact">Contact</x-nav-link>
        </nav>

        <div class="md:hidden">
            <button @click="open = !open">
                <svg x-show="!open" viewBox="0 0 20 20" width="20">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="white">
                            <path
                                d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
    
                <svg x-show="open" viewBox="0 0 20 20" width="20">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="white">
                            <polygon id="Combined-Shape"
                                points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644">
                            </polygon>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    

        <div class="hidden md:block">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <button>
                        <img src="https://www.placecage.com/30/30" class="rounded-full border border-white" alt="">
                    </button>
                </x-slot>
    
                <x-dropdown-item href="#">Account</x-dropdown-item>
                <x-dropdown-item href="#">Support</x-dropdown-item>
            </x-dropdown>
        </div>

    </div>

    <nav class="md:hidden mt-2"
    x-show="open"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    >
        <x-mobile-nav-link route="home">Home</x-mobile-nav-link>
        <x-mobile-nav-link route="about">About</x-mobile-nav-link>
        <x-mobile-nav-link route="testimonials">Testimonials</x-mobile-nav-link>
        <x-mobile-nav-link route="contact">Contact</x-mobile-nav-link>   
    </nav>

    
</header>