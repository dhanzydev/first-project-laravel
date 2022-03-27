<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Perpustakaan - @yield('title')</title>

    @stack('prepend-style')
        @include('includes.styles')
    @stack('addon-style')

</head>

<body>
    <div class="container-scroller">
        {{-- NAVBAR --}}
        @include('includes.navbar')
        {{-- END OF NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            {{-- SIDEBAR --}}
            @include('includes.sidebar')
            {{-- END OF SIDEBAR --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- CONTENT --}}
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
    </div>
    @stack('prepend-script')
     @include('includes.scripts')
    @stack('addon-script')
</body>

</html>
