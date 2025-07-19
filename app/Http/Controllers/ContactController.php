<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'cbxname' => 'required|string|max:255',
            'cbxemail' => 'required|email|max:255',
            'cbxsubject' => 'nullable|string|max:255',
            'cbxmessage' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->cbxname,
            'email' => $request->cbxemail,
            'subject' => $request->cbxsubject,
            'message' => $request->cbxmessage,
        ]);

        return back()->with('success', 'Your message has been sent! Our team will try to reach out to you shortly');
    }
}
