<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('nav')
            <p>Este es el menú de navegación.</p>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>