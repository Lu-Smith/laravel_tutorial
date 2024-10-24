<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
</head>
<body>
<div class="max-w-4xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg mt-12">
    <h2 class="text-3xl font-bold text-indigo-400 mb-6 text-center">Messages</h2>
    @foreach ($messages as $message)
    <div class="mb-4">
      <h2 class="mb-1">Sender: {{ $message->sender_name}}</h2>
      <h3 class="mb-1">Email: {{ $message->sender_email }}</h3>
      <p>{{$message->sender_message}}</p>
    </div>
    @endforeach
  </div>
</body>
</html>