<x-layout>
  <x-slot:title>Contact Us</x-slot:title>
  <form action="/contact" method="POST" novalidate>
    @csrf
    @if($errors->any())
    <div class="m-2 p-2 border-2 border-rose-500 rounded-md">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="mb-4">
      <label for="name" class="block text-sm font-semibold mb-2 text-indigo-300">
        Your Name
      </label>
      <input type="text" id="name" name="name" required
      value="{{ old('name') }}"
      class="w-full px-4 py-3 border border-gray-600 bg-gray-700 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>
    <div class="mb-4">
      <label for="email" class="block text-sm font-semibold mb-2 text-indigo-300">
        Your Email
      </label>
      <input type="email" id="email" name="email" required
        value="{{ old('email') }}"
      class="w-full px-4 py-3 border border-gray-600 bg-gray-700 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>
    <div class="mb-6">
      <label for="message" class="block text-sm font-semibold mb-2 text-indigo-300">
        Your Message
      </label>
      <textarea 
      name="message" 
      id="message" 
      rows="4"
      class="w-full px-4 py-3 border border-gray-600 bg-gray-700 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
      {{ old('message') }}
    </textarea>
    </div>
    <button 
    type="submit"
    class="w-full bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-500">
      Send Message
    </button>
  </form>
</x-layout>