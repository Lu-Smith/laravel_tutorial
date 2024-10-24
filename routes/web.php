<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
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
});

Route::get('/messages', function () {
    return view('messages', ['messages' => Message::all()]);
});
