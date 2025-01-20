<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;

    #[Title('Gallery')]
    public $activeCategory = 'all';
    public $categories = ['all', 'performances', 'studio', 'behind-the-scenes'];

    public function setCategory($category)
    {
        $this->activeCategory = $category;
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.pages.gallery');
    }
}