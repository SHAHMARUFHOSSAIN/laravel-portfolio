<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $isSuccess = false;

    protected $rules = [
        'name' => 'required|min:3|max:100',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|max:255',
        'message' => 'required|min:10|max:5000',
    ];

    protected $messages = [
        'name.required' => 'Please enter your name.',
        'name.min' => 'Name must be at least 3 characters.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Please enter your message.',
        'message.min' => 'Message must be at least 10 characters.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $this->validate();

        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new \App\Mail\ContactMail($contact));

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->isSuccess = true;
        $this->dispatch('contactSaved');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
