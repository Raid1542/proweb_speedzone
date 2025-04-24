<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'laravel App')</title>

    <link rel="stylesheet" href="styles/flowbite22.min.css">
    <script src="styles/flowbite22.min.js"></script>
    
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Navbar -->
    @include('components.menu22')

    <!-- Main Content -->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">@yield('page_title', 'Judul Halaman')</h2>
            @yield('content')
        </div>
    </main>
</body>
</html>