<body class="login-page">

    @include('__partials.alert')

    <div class="signup-login">
        <div class="sl-form-wrap">
            @yield('content')
        </div>
    </div>
    <!-- JS -->
    <script src="{{ mix('assets/app.js') }}"></script>
</body>
