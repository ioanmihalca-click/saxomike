
<div class="py-12">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="mb-8 text-4xl font-bold">Gallery</h1>

        <!-- Category Filter -->
        <div class="flex gap-4 mb-8">
            @foreach($categories as $category)
                <button wire:click="setCategory('{{ $category }}')"
                    class="px-4 py-2 rounded-md {{ $activeCategory === $category ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
                    {{ ucfirst($category) }}
                </button>
            @endforeach
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Add your gallery items here -->
        </div>
    </div>
</div>