<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts._partials.head')

</head>

<body class="sb-nav-fixed">

    @include('layouts._partials.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts._partials.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            <footer class="py-4 bg-light mt-auto">
                @include('layouts._partials.footer')
            </footer>
        </div>
    </div>
    @include('layouts._partials.scripts')
</body>

</html>
