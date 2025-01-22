<div>
    <div class="relative py-20">
        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Header Section - removed data-aos -->
            <div class="text-center">
                <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">Contact</h1>
                <p class="max-w-2xl mx-auto mb-16 text-lg text-gray-600">
                    Hai să discutăm despre următorul tău eveniment! Completează formularul și voi reveni cu un răspuns în cel mai scurt timp.
                </p>
            </div>

            <div class="max-w-2xl mx-auto">
            <div class="p-8 bg-white shadow-sm rounded-2xl">
                    @if (session()->has('message'))
                        <div class="flex items-center p-4 mb-6 text-sm text-green-700 rounded-lg bg-green-50">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ session('message') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nume</label>
                                <input type="text" 
                                       wire:model.live="name" 
                                       id="name"
                                       placeholder="Numele tău"
                                       class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                                @error('name') 
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" 
                                       wire:model.live="email" 
                                       id="email"
                                       placeholder="email@example.com"
                                       class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                                @error('email') 
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subiect</label>
                            <input type="text" 
                                   wire:model.live="subject" 
                                   id="subject"
                                   placeholder="Subiectul mesajului"
                                   class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                            @error('subject') 
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Mesaj</label>
                            <textarea wire:model.live="message" 
                                     id="message" 
                                     rows="5"
                                     placeholder="Scrie mesajul tău aici..."
                                     class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500"></textarea>
                            @error('message') 
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                            @enderror
                        </div>

                        <button type="submit"
                                wire:loading.class="cursor-not-allowed opacity-70"
                                wire:loading.attr="disabled"
                                class="w-full px-6 py-4 text-base font-medium text-white transition-all duration-200 bg-red-500 rounded-lg hover:bg-red-600 group">
                            <span class="flex items-center justify-center">
                                <!-- Loading Spinner -->
                                <svg wire:loading
                                     wire:target="submit"
                                     class="w-5 h-5 mr-3 -ml-1 animate-spin"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24">
                                    <circle class="opacity-25"
                                            cx="12"
                                            cy="12"
                                            r="10"
                                            stroke="currentColor"
                                            stroke-width="4"></circle>
                                    <path class="opacity-75"
                                          fill="currentColor"
                                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                
                                <!-- Button Text -->
                                <span wire:loading.remove wire:target="submit">Trimite mesajul</span>
                                <span wire:loading wire:target="submit">Se trimite...</span>
                                
                                <!-- Arrow Icon -->
                                <span wire:loading.remove wire:target="submit" class="ml-2 transition-transform duration-200 group-hover:translate-x-1">→</span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>