<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Gallery;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Events;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/events', Events::class)->name('events');
Route::get('/contact', Contact::class)->name('contact');


