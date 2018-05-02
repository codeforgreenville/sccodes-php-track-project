<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.header')
        
        <div class="container" id="main">
            @yield('content')
        </div>
    </body>
</html>
