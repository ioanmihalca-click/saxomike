<div class="py-12 bg-gray-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900">Galerie Media</h1>
            <p class="mt-4 text-xl text-gray-600">Experiențe și momente din performanțele mele</p>
        </div>

        <!-- Video Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($mediaItems as $media)
                <div class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-lg hover:shadow-xl">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.youtube.com/embed/{{ $media->youtube_id }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            class="w-full h-full"
                            loading="lazy"
                        ></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold">{{ $media->title }}</h3>
                        @if($media->description)
                            <p class="mt-2 text-gray-600">{{ $media->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $mediaItems->links() }}
        </div>
    </div>
</div>