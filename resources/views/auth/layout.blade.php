<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"
        defer
    ></script>
    <script
        src="/js/scripts.js"
        defer
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="/assets/demo/chart-area-demo.js"
        defer
    ></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
        crossorigin="anonymous"
        defer
    ></script>
    <script
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
        crossorigin="anonymous"
        defer
    ></script>
    <script
        src="/assets/demo/datatables-demo.js"
        defer
    ></script>

    <!-- Fonts -->
    <link
        rel="dns-prefetch"
        href="//fonts.gstatic.com"
    >
    <link
        href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet"
    >

    <!-- Styles -->
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <link
        href="{{ asset('css/styles.css') }}"
        rel="stylesheet"
    />
</head>

<body class="bg-secondary">
    <div id="app">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    @yield('content')
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                @include('layouts.footer')
            </div>
        </div>
    </div>
</body>

</html>
