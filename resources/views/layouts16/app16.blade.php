<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Laravel App')</title>    
        
        <link href="styles/flowbite.min.css" rel="stylesheet" />
        <script src="styles/floebite.min.js"></script>

    </head>
    <body class="bg-gray-100 text-gray-800 font-sans">


        <!-- Navbar -->
         @include('components16.menu')

        <!-- Main Content -->
         <main class="container mx-aout mt-10 px-4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-x1 font-semibold mb-4">@yield('page_title', 'judul Halaman')</h2>
                @yield('content')
            </div>
         </main>

         <!-- Foother -->
          <foother class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
            &copy; {{ date('Y') }} Laravel App. All right reserved.
          </foother>

        </body>
</html>