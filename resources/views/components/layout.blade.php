<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="http://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex w-full h-full bg-gray-900 text-gray-300">
        <div class="max-w-5xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg mt-12">
            <h2 class="text-3xl font-bold text-indigo-400 mb-6 text-center">
                {{ $title }}
            </h2>
            {{ $slot }}
        </div>
    </body>
</html>