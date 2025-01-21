<?php


namespace App\Livewire\Pages;

use App\Models\Media;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Gallery extends Component
{
    use WithPagination;

    public $activeCategory = 'all';

    #[Title('Gallery')]
    public function render()
    {
        $mediaItems = Media::when($this->activeCategory !== 'all', function($query) {
            $query->where('category_id', $this->activeCategory);
        })
        ->latest()
        ->paginate(9);

        $categories = Category::all();

        return view('livewire.pages.gallery', [
            'mediaItems' => $mediaItems,
            'categories' => $categories,
        ]);
    }

    public function setCategory($categoryId)
    {
        $this->activeCategory = $categoryId;
        $this->resetPage();
    }
}