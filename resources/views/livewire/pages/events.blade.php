<div class="py-12 bg-gray-100">
   <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
       <!-- Header -->
       <div class="mb-12 text-center">
           <h1 class="text-4xl font-bold text-gray-900">Evenimente</h1>
           <p class="mt-4 text-xl text-gray-600">Urmărește următoarele mele apariții</p>
       </div>

       <!-- Events Grid -->
       <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
           @foreach($events as $event)
               <div class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-lg hover:shadow-xl">
                   <div class="p-6">
                       <div class="flex items-center justify-between mb-4">
                           <div class="px-3 py-1 text-sm font-medium text-blue-600 bg-blue-100 rounded-full">
                               {{ $event->date->format('d.m.Y H:i') }}
                           </div>
                       </div>

                       <h3 class="mb-2 text-xl font-bold text-gray-900">{{ $event->title }}</h3>
                       
                       <div class="flex items-center mb-4 text-gray-600">
                           <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                           </svg>
                           <span>{{ $event->location }}</span>
                       </div>

                       <div class="mb-4 prose-sm prose max-w-none">
                           {!! $event->description !!}
                       </div>

                       @if($event->ticket_link)
                           <a href="{{ $event->ticket_link }}" 
                              target="_blank"
                              class="inline-flex items-center px-4 py-2 text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700">
                               Rezervă bilete
                               <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                               </svg>
                           </a>
                       @endif
                   </div>
               </div>
           @endforeach
       </div>

       <!-- Empty State -->
       @if($events->isEmpty())
           <div class="py-12 text-center">
               <p class="text-gray-500">Nu există evenimente programate momentan.</p>
           </div>
       @endif

       <!-- Pagination -->
       <div class="mt-8">
           {{ $events->links() }}
       </div>
   </div>
</div>