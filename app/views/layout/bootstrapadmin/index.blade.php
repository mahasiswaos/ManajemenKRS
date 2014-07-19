<html>
    <head>
        @include('layout.bootstrapadmin.head')
        @include('layout.bootstrapadmin.nav')
    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapadmin.footer')
    </body>
</html>