<body class="home-one">
<!-- Header start -->
<header class="header04">
    <div class="container d-flex align-items-center">
        <a class="logo" href="index.html">
            <img src="images/logo.png" alt="">
        </a>
        <nav class="primary-menu m-auto">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Раздел 1</a></li>
                <li><a href="#">Раздел 2</a></li>
                <li><a href="#">Раздел 3</a></li>
                <li><a href="#">Раздел 4</a></li>
                <li><a href="#">Раздел 5</a></li>
                <li><a href="#">Раздел 6</a></li>
            </ul>
        </nav>
        <a href="#" class="login btn-default"><span class="bh"></span> <span>Личный кабинет</span></a>
    </div>
</header>
<!-- Header end -->

@yield('content')

<!-- Footer strat -->
<footer class="footer">
    <div class="foo-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="foo-navigation">
                        <ul>
                            <li><a href="#">ссылка</a></li>
                            <li><a href="#">ссылка</a></li>
                            <li><a href="#">ссылка</a></li>
                            <li><a href="#">ссылка</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">Copyright - 2019</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
<!-- JS -->
<script src="{{ mix('assets/app.js') }}"></script>
</body>
