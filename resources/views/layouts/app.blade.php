<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @include('layouts.header')
    @include('layouts.aside')

    <section id="main-content">
        @yield('contenido')
    </section>
    

    @include('layouts.footer')
    @include('layouts.scripts')


</body>

</html>