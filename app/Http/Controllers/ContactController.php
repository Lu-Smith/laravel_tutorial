<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function showMessages() {
        return view('messages', ['messages' => Message::all()]);
    }

    public function showForm() {
        return view('contact');
    }

    public function storeMessage(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:8|max:1000',
        ]);
    
        Message::create([
            'sender_name' => $validated['name'],
            'sender_email' => $validated['email'],
            'sender_message' => $validated['message'],
        ]);
    
        return redirect('/messages');
    }
}
