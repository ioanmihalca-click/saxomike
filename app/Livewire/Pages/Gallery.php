<?php


namespace App\Livewire\Pages;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Gallery extends Component
{
    use WithPagination;

    #[Title('Galerie Media | saxomike.ro')]
    public function render()
    {
        return view('livewire.pages.gallery', [
            'mediaItems' => Media::latest()->paginate(9)
        ]);
    }
}