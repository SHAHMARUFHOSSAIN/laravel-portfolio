<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|max:255',
            'message' => 'required|min:10|max:5000',
        ]);

        $contact = Contact::create($validated);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}