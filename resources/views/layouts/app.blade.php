<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DriveSurat - Puhan Rialdo Wijaya')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-700 text-white flex-shrink-0 flex flex-col">
        <div class="p-6 font-bold text-2xl border-b border-indigo-600">
            DriveSurat
        </div>
        <nav class="flex-1 mt-4">
            <a href="{{ route('dashboard') }}" class="block px-6 py-3 hover:bg-indigo-600 transition rounded-lg">Dashboard</a>
            <a href="{{ route('arsip.index') }}" class="block px-6 py-3 hover:bg-indigo-600 transition rounded-lg">Arsip</a>
            <a href="{{ route('kategori.index') }}" class="block px-6 py-3 hover:bg-indigo-600 transition rounded-lg">Kategori</a>
            <a href="{{ url('/tentang') }}" class="block px-6 py-3 hover:bg-indigo-600 transition rounded-lg">Tentang</a>
        </nav>
        <div class="p-6 border-t border-indigo-600 text-sm">
            &copy; {{ date('Y') }} DriveSurat
        </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 overflow-y-auto p-6">
        @yield('content')
    </main>

</body>
</html>
