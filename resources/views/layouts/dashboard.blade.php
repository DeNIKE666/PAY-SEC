<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--TITLE-->
    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ mix('assets/dashboard.css') }}"/>

</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- Document Wrapper -->
<div id="main-wrapper">
    <!-- Content  -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">
                <!-- Left side bar -->
                <aside class="col-lg-3 sidebar">
                    <!-- Pages List  -->
                    <div class="bg-light shadow-sm text-center  mb-4">
                        <div class="Profile-menu">
                            <ul class="nav secondary-nav">
                                <li class="nav-item"><a class="nav-link " href="{{ route('cabinet') }}"><i class="fas fa-tachometer-alt"></i> Кабинет </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Pages List End -->

                </aside>
                <!-- Left Panel End -->

                <!-- Middle Panel  -->

                <div class="col-lg-9">
                    @yield('content')
                </div>
                <!-- Middle Panel End -->
            </div>
        </div>
    </div>
    <!-- Content end -->

    <!-- Footer strat -->
    <footer class="footer">
        <div class="foo-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">Copyright - 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Script -->
<script src="{{ mix('assets/dashboard.js') }}"></script>
</body>
</html>
