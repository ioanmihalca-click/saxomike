{{-- resources/views/livewire/pages/home.blade.php --}}
<div>
    <!-- Hero Section -->
    <div class="relative bg-gray-900 h-[600px]">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-bg.jpg') }}" alt="Saxophonist performing" class="object-cover w-full h-full opacity-50">
        </div>
        <div class="relative px-4 py-24 mx-auto max-w-7xl sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Artist Name
            </h1>
            <p class="max-w-3xl mt-6 text-xl text-gray-300">
                Professional Saxophonist | Performer | Composer
            </p>
            <div class="mt-10">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
                    Book Now
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Events Section -->
    <div class="py-12 bg-white">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Upcoming Events
                </h2>
            </div>

            <div class="mt-10">
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($upcomingEvents as $event)
                        <div class="overflow-hidden bg-white rounded-lg shadow">
                            <div class="p-6">
                                <h3 class="text-lg font-medium text-gray-900">
                                    {{ $event->title }}
                                </h3>
                                <p class="mt-2 text-gray-600">
                                    {{ $event->date->format('F j, Y g:i A') }}
                                </p>
                                <p class="mt-2 text-gray-600">
                                    {{ $event->location }}
                                </p>
                                @if($event->ticket_link)
                                    <div class="mt-4">
                                        <a href="{{ $event->ticket_link }}" class="text-blue-600 hover:text-blue-500">
                                            Get Tickets →
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                
                @if($upcomingEvents->isEmpty())
                    <p class="text-center text-gray-500">No upcoming events at the moment.</p>
                @endif
                
                <div class="mt-6 text-center">
                    <a href="{{ route('events') }}" class="text-blue-600 hover:text-blue-500">
                        View All Events →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Biography Section -->
    <div class="py-12 bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    About Me
                </h2>
                <p class="max-w-2xl mt-4 text-xl text-gray-500 lg:mx-auto">
                    Professional saxophonist with over X years of experience...
                </p>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('about') }}" class="text-blue-600 hover:text-blue-500">
                    Read More →
                </a>
            </div>
        </div>
    </div>
</div>