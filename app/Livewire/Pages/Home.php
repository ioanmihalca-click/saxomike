<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('Home | saxomike.ro')]
    public function render()
    {
        $upcomingEvents = Event::where('date', '>=', now())
            ->where('is_featured', true)
            ->orderBy('date')
            ->take(3)
            ->get();

        return view('livewire.pages.home', [
            'upcomingEvents' => $upcomingEvents
        ]);
    }
}