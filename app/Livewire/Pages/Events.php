<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Events extends Component
{
    use WithPagination;

    #[Title('Evenimente | Mihai Stanciuc - Saxofonist Profesionist | SaxoMike')]
    public function render()
    {
        $events = Event::where('date', '>=', now())
            ->orderBy('date')
            ->paginate(9);

        return view('livewire.pages.events', [
            'events' => $events
        ]);
    }
}