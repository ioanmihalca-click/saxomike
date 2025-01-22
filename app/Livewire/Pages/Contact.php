<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    #[Title('Contact')]
    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email:rfc,dns|max:100',
            'subject' => 'required|min:5|max:200',
            'message' => 'required|min:10|max:1000'
        ], [
            'name.required' => 'Te rugăm să îți introduci numele.',
            'name.min' => 'Numele trebuie să aibă cel puțin :min caractere.',
            'email.required' => 'Te rugăm să introduci adresa de email.',
            'email.email' => 'Te rugăm să introduci o adresă de email validă.',
            'subject.required' => 'Te rugăm să introduci subiectul mesajului.',
            'subject.min' => 'Subiectul trebuie să aibă cel puțin :min caractere.',
            'message.required' => 'Te rugăm să scrii mesajul tău.',
            'message.min' => 'Mesajul trebuie să aibă cel puțin :min caractere.',
        ]);

        try {
            $emailContent = "Nume: {$this->name}\n";
            $emailContent .= "Email: {$this->email}\n";
            $emailContent .= "Subiect: {$this->subject}\n\n";
            $emailContent .= "Mesaj:\n{$this->message}";

            Mail::raw($emailContent, function($message) {
                $message->to('contact@saxomike.ro')
                        ->replyTo($this->email, $this->name)
                        ->subject("Formular Contact: {$this->subject}");
            });

            session()->flash('message', 'Mesajul tău a fost trimis cu succes! Îți vom răspunde în cel mai scurt timp.');
            
            $this->reset(['name', 'email', 'subject', 'message']);

        } catch (\Exception $e) {
            session()->flash('error', 'Ne pare rău, a apărut o eroare. Te rugăm să încerci din nou mai târziu.');
            logger()->error('Contact form error', ['error' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}