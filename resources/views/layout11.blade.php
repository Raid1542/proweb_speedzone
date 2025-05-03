<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'My App')</title>
    </head>
    <body>
        <header>
            @include('components11.header11')
        </header>

        <h1>List Produk</h1>
        <div class="container">
            <main>
                @yield('content')
            </main>
        </div>

        <footer>
            @include('components11.footer11')
        </footer>
    </body>
</html>
