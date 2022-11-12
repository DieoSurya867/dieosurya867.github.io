<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">



    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>
    <div class="page-holder">

        {{-- Navbar --}}
        @include('includes.navbar')

        {{-- Page Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('includes.footer')

        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous" />
        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite -
            //   see more here
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {
                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = "d-none";
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                };
            }
            // this is set to BootstrapTemple website as you cannot
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite(
                "https://bootstraptemple.com/files/icons/orion-svg-sprite.svg"
            );
        </script>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    </div>
</body>

</html>
