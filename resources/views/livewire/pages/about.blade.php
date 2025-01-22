<div>
    <!-- Hero Section cu video -->
    <div class="relative bg-gray-900 h-[50vh]">
        <div class="absolute inset-0">
            <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/80 via-black/50 to-black/80"></div>
            <video autoplay muted loop playsinline class="object-cover w-full h-full" loading="lazy" preload="none">
                <source src="{{ asset('images/hero-bg.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="relative z-20 flex items-center justify-center h-full">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-white md:text-6xl lg:text-7xl">
                    Despre Mine
                </h1>
                <p class="max-w-2xl mx-auto mt-4 text-xl text-gray-300">
                    Saxofonist profesionist | Performer | Artist
                </p>
            </div>
        </div>
    </div>

    <!-- Biography Section -->
    <div class="py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="items-start lg:grid lg:grid-cols-2 lg:gap-24">
                <!-- Left Column - Biography and Specialties -->
                <div class="lg:sticky lg:top-8">
                    <!-- Biography -->
                    <div class="mb-12 prose prose-lg max-w-none">
                        <h2 class="mb-8 text-4xl font-bold text-gray-900">Biografie</h2>
                        <div class="space-y-6 text-gray-600">
                            <p class="text-lg leading-relaxed">
                                Absolvent al Academiei de Muzică "Gheorghe Dima" Cluj-Napoca, Stanciuc Mihai cunoscut și
                                sub numele de <span class="font-medium text-gray-900">Saxo Mike</span>, s-a făcut ușor
                                remarcat în diverse genuri muzicale, de la muzică ambientală până la jazz contemporan.
                            </p>
                            <p class="text-lg leading-relaxed">
                                Prin interpretările sale unice și versatilitatea stilistică, reușește să creeze
                                atmosfera perfectă pentru orice tip de eveniment, fie că este vorba despre un cafe
                                concert elegant sau o petrecere vibrantă.
                            </p>
                        </div>
                    </div>

                    <div class="p-8 text-white shadow-xl bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl">
                        <h3 class="mb-8 text-2xl font-semibold">Specializări</h3>
                        <ul class="space-y-5">
                            <li class="flex items-center space-x-4">
                                <span
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-red-500/20">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                    </svg>
                                </span>
                                <span class="text-lg">Muzică ambientală</span>
                            </li>

                            <li class="flex items-center space-x-4">
                                <span
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-red-500/20">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2-1.343-2-3-2zM17 6v12M7 8v8m0-8c0-1.105 1.343-2 3-2s3 .895 3 2m-6 0c0 1.105 1.343 2 3 2s3-.895 3-2M7 16c0-1.105 1.343-2 3-2s3 .895 3 2m0-8c0 1.105 1.343 2 3 2s3-.895 3-2m-6 0c0-1.105 1.343-2 3-2s3 .895 3 2" />
                                    </svg>
                                </span>
                                <span class="text-lg">Cafe concert</span>
                            </li>

                            <li class="flex items-center space-x-4">
                                <span
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-red-500/20">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </span>
                                <span class="text-lg">Blues & Soft Jazz</span>
                            </li>

                            <li class="flex items-center space-x-4">
                                <span
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-red-500/20">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="text-lg">Cover-uri internaționale</span>
                            </li>

                            <li class="flex items-center space-x-4">
                                <span
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-red-500/20">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                    </svg>
                                </span>
                                <span class="text-lg">Evenimente private și mondene</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column - Image Gallery -->
                <div class="mt-12 space-y-8 lg:mt-0">
                    <div class="relative">
                        <div
                            class="absolute inset-0 transform bg-gradient-to-r from-red-500 to-purple-600 rounded-2xl rotate-1 opacity-10">
                        </div>
                        <img src="{{ asset('images/mihai-stanciuc-despre.webp') }}" alt="Saxo Mike performing"
                            class="relative rounded-2xl shadow-2xl w-full object-cover aspect-[3/4]" loading="lazy">
                    </div>

                    <!-- Experience Highlights -->
                    <div class="grid grid-cols-2 gap-6 mt-12">
                        <div class="p-6 text-center bg-gray-50 rounded-xl">
                            <div class="mb-2 text-4xl font-bold text-red-500">10+</div>
                            <div class="text-gray-600">Ani de experiență</div>
                        </div>
                        <div class="p-6 text-center bg-gray-50 rounded-xl">
                            <div class="mb-2 text-4xl font-bold text-red-500">500+</div>
                            <div class="text-gray-600">Evenimente live</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
