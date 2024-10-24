<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\StoreMessagesRequest;

class ContactController extends Controller
{
    public function showMessages() {
        return view('messages', ['messages' => Message::all()]);
    }

    public function showForm() {
        return view('contact');
    }

    public function storeMessage(StoreMessagesRequest $request) {
        Message::create([
            'sender_name' => $request->input('name'),
            'sender_email' => $request->input('email'),
            'sender_message' => $request->input('message'),
        ]);
    
        return redirect('/messages');
    }
}
