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
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>
<script src="{{ asset('jquery/jquery_3.5.1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
