<div>
<!-- Hero Section cu video -->
<div class="relative h-screen overflow-hidden bg-gray-900">
    <!-- Video Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 via-black/40 to-transparent"></div>
        <video 
            autoplay 
            muted 
            loop 
            playsinline
            class="object-cover w-full h-full"
            loading="lazy"
            preload="none"
            poster="{{ asset('images/hero-poster.jpg') }}"
        >
            <source src="{{ asset('images/hero-bg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- Hero Content -->
    <div class="relative z-20 flex items-center h-full pb-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Badge/Label -->
            <div class="inline-flex items-center px-4 py-2 mb-8 rounded-full bg-white/10 backdrop-blur-sm"
                 data-aos="fade-down" 
                 data-aos-delay="200">
                <span class="flex items-center">
                    <span class="w-2 h-2 mr-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-white">Saxofonist Professional</span>
                </span>
            </div>

            <!-- Main Title -->
            <h1 class="mb-6 text-5xl font-bold leading-tight text-white md:text-6xl lg:text-7xl"
                data-aos="fade-up" 
                data-aos-delay="400">
                Mihai Stanciuc
            </h1>

            <!-- Subtitle -->
            <p class="max-w-3xl mb-8 text-xl text-gray-200 md:text-2xl"
               data-aos="fade-up" 
               data-aos-delay="600">
                Live Performance | Evenimente Private | Jazz & Blues
            </p>

            <!-- CTAs -->
            <div class="flex flex-col gap-4 sm:flex-row"
                 data-aos="fade-up" 
                 data-aos-delay="800">
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white transition-all duration-300 transform bg-red-500 rounded-lg hover:bg-red-600 hover:-translate-y-1">
                    PROGRAMEAZĂ UN EVENIMENT →
                </a>
                <a href="{{ route('gallery') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white transition-all duration-300 transform border-2 border-white rounded-lg hover:bg-white hover:text-gray-900 hover:-translate-y-1">
                    VEZI GALERIA
                </a>
            </div>
        </div>
    </div>

 <!-- Wave Divider nou -->
    <div class="absolute bottom-0 left-0 right-0 w-full">
        <svg 
            viewBox="0 0 1440 156" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg" 
            preserveAspectRatio="none"
            class="w-full h-[156px]"
        >
            <path 
                d="M0 156H1440V60C1200 120 720 0 480 60C240 120 120 30 0 60V156Z" 
                fill="white"
            />
        </svg>
    </div>
</div>

<!-- Evenimente Section -->
<div class="py-20 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="mb-4 text-4xl font-bold text-gray-900" data-aos="fade-up">
                Evenimente Viitoare
            </h2>
            <p class="mb-12 text-xl text-gray-600" data-aos="fade-up" data-aos-delay="200">
                Rezervă-ți din timp locul la următoarele mele apariții
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" data-aos="fade-up" data-aos-delay="400">
            @foreach($upcomingEvents as $event)
                <div class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="p-8">
                        <div class="mb-2 text-sm font-medium text-red-500">
                            {{ $event->date->format('j F Y, H:i') }}
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900">
                            {{ $event->title }}
                        </h3>
                        <p class="mb-4 text-gray-600">
                            {{ $event->location }}
                        </p>
                        @if($event->ticket_link)
                            <a href="{{ $event->ticket_link }}" 
                               class="inline-flex items-center font-medium text-red-500 hover:text-red-600">
                                Rezervă un loc →
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Biography Section -->
<div class="py-20 bg-gray-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="lg:text-center" data-aos="fade-up">
            <h2 class="mb-6 text-4xl font-bold text-gray-900">
                Saxo Mike
            </h2>
            <p class="max-w-3xl mx-auto text-xl leading-relaxed text-gray-600">
                Absolvent al Academiei de Muzică "Gheorghe Dima" Cluj-Napoca, Stanciuc Mihai, cunoscut și sub numele de Saxo Mike, aduce o notă distinctă în lumea muzicii, de la jazz soft la muzică ambientală.
            </p>
            <div class="mt-8">
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center text-lg font-medium text-red-500 hover:text-red-600 group">
                    Află mai multe
                    <svg class="w-5 h-5 ml-2 transition-transform transform group-hover:translate-x-1" 
                         fill="none" 
                         stroke="currentColor" 
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
</div>