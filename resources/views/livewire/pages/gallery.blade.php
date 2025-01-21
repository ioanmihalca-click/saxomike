<div class="py-12 bg-gray-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900">Galerie</h1>
            <p class="mt-4 text-xl text-gray-600">Experiențe și momente din performanțele mele</p>
        </div>

        <!-- Categories Filter -->
        <div class="flex flex-wrap justify-center gap-4 mt-8 mb-12">
            <button wire:click="setCategory('all')"
                class="px-6 py-2 text-sm font-medium rounded-full transition-all {{ $activeCategory === 'all' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' }}">
                Toate
            </button>
            @foreach ($categories as $category)
                <button wire:click="setCategory('{{ $category->id }}')"
                    class="px-6 py-2 text-sm font-medium rounded-full transition-all {{ $activeCategory === $category->id ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>

        <!-- Media Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($mediaItems as $media)
                <div class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-lg hover:shadow-xl">
                    @if ($media->type === 'youtube')
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="https://www.youtube.com/embed/{{ $media->path }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full" loading="lazy"></iframe>
                        </div>
                    @else
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="{{ $media->getFirstMediaUrl('gallery') }}" alt="{{ $media->alt_text }}"
                                class="object-cover w-full h-full" loading="lazy">
                        </div>
                    @endif
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $media->title }}</h3>
                            <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full">
                                {{ $media->category->name }}
                            </span>
                        </div>
                        @if ($media->description)
                            <p class="text-gray-600">{{ $media->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $mediaItems->links() }}
        </div>

        <!-- Empty State -->
        @if ($mediaItems->isEmpty())
            <div class="p-12 text-center">
                <p class="text-gray-500">Nu există conținut în această categorie momentan.</p>
            </div>
        @endif
    </div>
</div>
