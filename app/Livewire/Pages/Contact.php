<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Contact extends Component
{
    #[Title('Contact')]
    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10'
        ];
    }

    public function submit()
    {
        $this->validate();

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Show success message

        session()->flash('message', 'Thank you for your message. We will get back to you soon!');

        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}