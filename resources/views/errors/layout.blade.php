<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        {{ config('app.name', 'Laravel') }} @yield('title')
    </title>

    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <link
        href="css/styles.css"
        rel="stylesheet"
    />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"
        defer
    ></script>
</head>

<body>
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4">
                                <h1 class="display-1">@yield('code')</h1>
                                <p class="lead">@yield('title')</p>
                                <p>@yield('message')</p>

                                <a
                                    href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                                    <i class="fas fa-arrow-left mr-1"></i>
                                    {{ __('Return to Dashboard') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutError_footer">
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
