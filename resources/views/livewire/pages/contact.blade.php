<div class="relative py-20">
    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center">
            <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl" data-aos="fade-down">
                Contact
            </h1>
            <p class="max-w-2xl mx-auto mb-16 text-lg text-gray-600" data-aos="fade-up" data-aos-delay="100">
                Hai să discutăm despre următorul tău eveniment! Completează formularul și voi reveni cu un răspuns în cel mai scurt timp.
            </p>
        </div>

        <div class="max-w-2xl mx-auto">
            <div class="p-8 bg-white shadow-sm rounded-2xl" data-aos="fade-up">
                <form wire:submit="submit" class="space-y-6">
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nume</label>
                            <input type="text" 
                                   wire:model="name" 
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
                                   wire:model="email" 
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
                               wire:model="subject" 
                               id="subject"
                               placeholder="Subiectul mesajului"
                               class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                        @error('subject') 
                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Mesaj</label>
                        <textarea wire:model="message" 
                                  id="message" 
                                  rows="5"
                                  placeholder="Scrie mesajul tău aici..."
                                  class="block w-full px-4 py-3 border border-gray-200 rounded-lg bg-gray-50/50 focus:ring-1 focus:ring-red-500 focus:border-red-500"></textarea>
                        @error('message') 
                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span> 
                        @enderror
                    </div>

                    @if (session()->has('message'))
                        <div class="p-4 text-sm text-green-700 rounded-lg bg-green-50">
                            {{ session('message') }}
                        </div>
                    @endif

                    <button type="submit"
                            class="w-full px-6 py-4 text-base font-medium text-white transition-all duration-200 bg-red-500 rounded-lg hover:bg-red-600">
                        <span>Trimite mesajul</span>
                        <span class="ml-2">→</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>