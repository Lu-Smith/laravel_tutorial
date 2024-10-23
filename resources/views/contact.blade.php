<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <script src="http://cdn.tailwindcss.com"></script>
</head>
<body class="flex w-full h-full bg-gray-900 text-gray-300">
  <div class="max-w-4xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg mt-12">
    <h2 class="text-3xl font-bold text-indigo-400 mb-6 text-center">Contact Us</h2>
    <form action="/contact" method="POST" novalidate>
        <div class="mb-4">
          <label for="name" class="block text-sm font-semibold mb-2 text-indigo-300">
            Your Name
          </label>
          <input type="text" id="name" name="name" required
          class="w-full px-4 py-3 border border-gray-600 bg-gray-700 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-semibold mb-2 text-indigo-300">
            Your Email
          </label>
          <input type="email" id="email" name="email" required
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
          class="w-full px-4 py-3 border border-gray-600 bg-gray-700 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>
        <button 
        type="submit"
        class="w-full bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-500">
          Send Message
        </button>
      </form>
  </div>
</body>
</html>