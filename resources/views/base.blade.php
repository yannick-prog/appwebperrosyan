<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- bootstrap -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- css -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    @yield('css')
    @yield('librerias')
</head>
<body>
@include('structural.nav')
<main class="container pt-5">
    @yield('content')
</main>
<script src="{{ asset('vue/dist/vue.global.js') }}"></script>
<script src="{{ asset('jquery/jquery_3.5.1.js') }}"></script>
<script src="{{ asset('bootstrap.js') }}"></script>
<script>
    const nav = Vue.createApp({
        data() {
            return {
                navButtonClass: ['text-forest', 'btn btn-lg', 'btn-outline-secondary', 'rounded-1']
            }
        },
        methods: {
            dataFieldClass(routeName, activeRoute) {
                if(routeName === activeRoute)
                    return true
                else
                    return false
            }
        }

    })
    nav.mount('nav')
</script>
@yield('scripts')
</body>
</html>
