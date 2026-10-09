<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tugas P9') - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen">
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 py-3 flex items-center gap-6">
            <span class="font-bold text-red-600">TugasWeb-P9</span>
            <a href="/" class="hover:text-red-600">Home</a>
            <a href="/about" class="hover:text-red-600">About</a>
            <a href="/contact" class="hover:text-red-600">Contact</a>
            <a href="/hello/Dunia" class="hover:text-red-600">Hello</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-slate-500 py-6">
        Dibuat dengan Laravel {{ app()->version() }} &middot; PHP {{ PHP_VERSION }}
    </footer>
</body>
</html>
