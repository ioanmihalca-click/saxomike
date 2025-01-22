{{-- În app.blade.php, footer actualizat --}}
<footer class="text-gray-300 bg-gradient-to-b from-black to-gray-900">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Contact Info -->
            <div class="transition-all duration-300 hover:transform hover:scale-105">
                <h3 class="pb-2 mb-4 text-lg font-semibold text-white border-b border-indigo-900/30">Contact</h3>
                <div class="space-y-3">
                    <a href="https://wa.me/40123456789" target="_blank" rel="noopener noreferrer"
                        class="flex items-center group">
                        <!-- WhatsApp Icon -->
                        <svg class="w-5 h-5 mr-2 transition-colors group-hover:text-indigo-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        <span class="transition-colors group-hover:text-indigo-400">+40 123 456 789</span>
                    </a>
                    <a href="mailto:contact@saxomike.ro" class="flex items-center group">
                        <!-- Email Icon -->
                        <svg class="w-5 h-5 mr-2 transition-colors group-hover:text-indigo-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="transition-colors group-hover:text-indigo-400">contact@saxomike.ro</span>
                    </a>
                    <p class="flex items-center group">
                        <svg class="w-5 h-5 mr-2 transition-colors group-hover:text-indigo-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="transition-colors group-hover:text-indigo-400">Cluj-Napoca, România</span>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="transition-all duration-300 hover:transform hover:scale-105">
                <h3 class="pb-2 mb-4 text-lg font-semibold text-white border-b border-indigo-900/30">Link-uri Rapide
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center transition-colors hover:text-indigo-400">
                            <span class="transition-transform duration-200 transform hover:translate-x-2">→</span>
                            <span class="ml-2">Acasă</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="flex items-center transition-colors hover:text-indigo-400">
                            <span class="transition-transform duration-200 transform hover:translate-x-2">→</span>
                            <span class="ml-2">Despre</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="flex items-center transition-colors hover:text-indigo-400">
                            <span class="transition-transform duration-200 transform hover:translate-x-2">→</span>
                            <span class="ml-2">Galerie Media</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('events') }}"
                            class="flex items-center transition-colors hover:text-indigo-400">
                            <span class="transition-transform duration-200 transform hover:translate-x-2">→</span>
                            <span class="ml-2">Evenimente</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="flex items-center transition-colors hover:text-indigo-400">
                            <span class="transition-transform duration-200 transform hover:translate-x-2">→</span>
                            <span class="ml-2">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="transition-all duration-300 hover:transform hover:scale-105">
                <h3 class="pb-2 mb-4 text-lg font-semibold text-white border-b border-indigo-900/30">Social Media</h3>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-300 transition-transform hover:scale-110 hover:text-indigo-400">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 transition-transform hover:scale-110 hover:text-indigo-400">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 transition-transform hover:scale-110 hover:text-indigo-400">
                        <span class="sr-only">YouTube</span>
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright & Attribution -->
        <div class="pt-8 mt-8 text-center border-t border-indigo-900/30">
            <div class="space-y-4">
                <p>&copy; {{ date('Y') }} Mihai Stanciuc. Toate drepturile rezervate.</p>
                <p class="text-sm text-gray-400">
                    Made with <span class="text-indigo-500">♥</span> by
                    <a href="https://clickstudios-digital.com"
                        class="text-indigo-400 transition-colors hover:text-indigo-300" target="_blank"
                        rel="noopener noreferrer">
                        Click Studios Digital
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
