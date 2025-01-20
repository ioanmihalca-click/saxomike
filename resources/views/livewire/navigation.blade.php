
<nav x-data="{ open: false }" class="bg-white shadow">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-xl font-bold">
                        Saxophonist
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('home') }}" 
                       class="{{ request()->routeIs('home') ? 'border-blue-500' : 'border-transparent' }} text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                       class="{{ request()->routeIs('about') ? 'border-blue-500' : 'border-transparent' }} text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        About
                    </a>
                    <a href="{{ route('gallery') }}"
                       class="{{ request()->routeIs('gallery') ? 'border-blue-500' : 'border-transparent' }} text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Gallery
                    </a>
                    <a href="{{ route('events') }}"
                       class="{{ request()->routeIs('events') ? 'border-blue-500' : 'border-transparent' }} text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Events
                    </a>
                    <a href="{{ route('contact') }}"
                       class="{{ request()->routeIs('contact') ? 'border-blue-500' : 'border-transparent' }} text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button wire:click="toggleMenu" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 hover:bg-gray-100">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="{{ !$isMenuOpen ? 'inline-flex' : 'hidden' }}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path class="{{ $isMenuOpen ? 'inline-flex' : 'hidden' }}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden {{ $isMenuOpen ? 'block' : 'hidden' }}">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" 
               class="{{ request()->routeIs('home') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Home
            </a>
            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                About
            </a>
            <a href="{{ route('gallery') }}"
               class="{{ request()->routeIs('gallery') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Gallery
            </a>
            <a href="{{ route('events') }}"
               class="{{ request()->routeIs('events') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Events
            </a>
            <a href="{{ route('contact') }}"
               class="{{ request()->routeIs('contact') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Contact
            </a>
        </div>
    </div>
</nav>