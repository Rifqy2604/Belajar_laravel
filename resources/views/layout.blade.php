<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-black mb-4 text-center">
            Aplikasi Catatan B
        </h1>
    @yield('konten')
      {{-- Flowbite --}}
      <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>