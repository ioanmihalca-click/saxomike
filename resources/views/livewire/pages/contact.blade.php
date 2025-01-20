
<div class="py-12">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="mb-8 text-4xl font-bold">Contact</h1>

            @if (session()->has('message'))
                <div class="relative px-4 py-3 mb-6 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('message') }}
                </div>
            @endif

            <form wire:submit="submit" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" wire:model="name" id="name"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" wire:model="email" id="email"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" wire:model="subject" id="subject"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    @error('subject') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea wire:model="message" id="message" rows="4"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"></textarea>
                    @error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>