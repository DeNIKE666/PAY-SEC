<body class="home-one">

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

{{-- Header --}}
    @include('__partials.header')
{{-- Alert --}}
    @include('__partials.alert')
{{-- Content --}}
    @yield('content')
{{-- Footer --}}
    @include('__partials.footer')

    <script src="{{ mix('assets/app.js') }}"></script>
</body>
