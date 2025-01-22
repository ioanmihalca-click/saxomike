<div>

    <!-- Hero Section cu video -->
    <div class="relative bg-gray-900 h-[400px]"> <!-- Notice reduced height compared to home -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
            <video autoplay muted loop playsinline class="object-cover w-full h-full opacity-75" loading="lazy"
                preload="none">
                <source src="{{ asset('images/hero-bg.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="relative z-20 flex items-center h-full">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-center text-white md:text-5xl lg:text-6xl">
                    Despre Mine
                </h1>
            </div>
        </div>
    </div>

<!-- Biography Section -->
<div class="py-16">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16">
            <!-- Left Column - Biography and Specialties -->
            <div>
                <!-- Biography -->
                <div class="mb-8 prose prose-lg max-w-none">
                    <h2 class="mb-8 text-3xl font-bold text-gray-900">Biografie</h2>
                    <div class="space-y-6 text-gray-600">
                        <p class="text-lg leading-relaxed">
                            Absolvent al Academiei de Muzică "Gheorghe Dima" Cluj-Napoca, Stanciuc Mihai cunoscut și sub numele de Saxo Mike, s-a facut ușor remarcat atât în muzica ambientală, cafe concert, blues, soft jazz, cover-uri ale celor mai cunoscute piese internaționale cât și în muzica de club, la piscină, restaurante, evenimente private și mondene, prin modul original în care își pune amprenta în interpretarea pieselor.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Acesta va crea o atmosferă aparte, iar muzica și timbrul saxofonului sunt cu siguranță unice. Astfel vei putea să dansezi pe muzica preferată sau să socializezi ascultând cele mai frumoase melodii.
                        </p>
                    </div>
                </div>

                <!-- Specialități - Vizibil doar pe Desktop sub biografie -->
                <div class="hidden p-8 shadow-lg lg:block bg-gray-50 rounded-xl">
                    <h3 class="mb-6 text-xl font-semibold text-gray-900">Specializări</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Muzică ambientală
                        </li>
                         <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Cafe concert
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Blues & Soft Jazz
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Cover-uri internaționale
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Evenimente private și mondene
                            </li>
                        </ul>
                </div>
            </div>

            <!-- Right Column - Image and Mobile Specialties -->
            <div class="mt-12 space-y-8 lg:mt-0">
                <!-- Image -->
                <div class="max-w-md mx-auto lg:mx-0">
                    <div class="aspect-[800/1202] overflow-hidden rounded-xl shadow-xl">
                        <img 
                            src="{{ asset('images/mihai-stanciuc-despre.webp') }}" 
                            alt="Saxo Mike performing" 
                            class="object-cover object-center w-full h-full transition-transform duration-500 transform hover:scale-105"
                            width="800"
                            height="1202"
                        >
                    </div>
                </div>
                
                <!-- Specialități - Vizibil doar pe Mobile -->
                <div class="p-8 shadow-lg lg:hidden bg-gray-50 rounded-xl">
                    <h3 class="mb-6 text-xl font-semibold text-gray-900">Specializări</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Muzică ambientală
                        </li>
                       <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Cafe concert
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Blues & Soft Jazz
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Cover-uri internaționale
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Evenimente private și mondene
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>


