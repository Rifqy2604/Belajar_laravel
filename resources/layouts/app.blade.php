<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Hasil Belajar</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white px-6 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('catatan-hasil-belajar.index') }}" class="text-lg font-bold">
                📚 Catatan Belajar
            </a>
            <div class="space-x-4">
                <a href="{{ route('catatan-hasil-belajar.index') }}" class="hover:underline">Home</a>
                <a href="{{ route('catatan-hasil-belajar.create') }}" class="hover:underline">Tambah Catatan</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-3">
        &copy; {{ date('Y') }} Catatan Hasil Belajar - Laravel + Tailwind
    </footer>

</body>
</html>
