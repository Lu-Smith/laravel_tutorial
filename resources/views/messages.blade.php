<x-layout>
  <x-slot:title>Messages</x-slot:title>
    @foreach ($messages as $message)
    <div class="mb-4">
      <h2 class="mb-1">Sender: {{ $message->sender_name}}</h2>
      <h3 class="mb-1">Email: {{ $message->sender_email }}</h3>
      <p>{{$message->sender_message}}</p>
    </div>
    @endforeach
</x-layout>