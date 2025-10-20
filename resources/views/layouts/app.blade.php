<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistem Pendaftaran Beasiswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Sistem Pendaftaran Beasiswa</h1>
            <nav class="space-x-4">
                <a href="{{ route('scholarship.choices') }}" class="text-blue-600 hover:underline">Pilihan Beasiswa</a>
                <a href="{{ route('scholarship.register') }}" class="text-blue-600 hover:underline">Daftar</a>
                <a href="{{ route('scholarship.results') }}" class="text-blue-600 hover:underline">Hasil</a>
            </nav>
        </div>
    </header>
    <main class="py-6">
        @yield('content')
    </main>
</body>
</html>
