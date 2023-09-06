<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YIAT - @yield('pageTitle')</title>
    <link rel=icon href="/frontend/logo.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="/frontend/css/flaticon.min.css">
    <link rel="stylesheet" href="/frontend/css/nice-select.min.css">
    <link rel="stylesheet" href="/frontend/css/magnific.min.css">
    <link rel="stylesheet" href="/frontend/css/spacing.min.css">
    <link rel="stylesheet" href="/frontend/css/slick.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body class='sc5'>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="#" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    @include('frontend.layouts.header')
    <!-- navbar end -->





    @yield('content')


    <!-- footer area start -->
      @include('frontend.layouts.footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/nice-select.min.js"></script>
    <script src="/frontend/js/circle-progress.min.js"></script>
    <script src="/frontend/js/skill.bars.jquery.min.js"></script>
    <script src="/frontend/js/magnific.min.js"></script>
    <script src="/frontend/js/appear.min.js"></script>
    <script src="/frontend/js/isotope.min.js"></script>
    <script src="/frontend/js/imageload.min.js"></script>
    <script src="/frontend/js/slick.min.js"></script>

    <!-- main js  -->
    <script src="/frontend/js/main.js"></script>
</body>

</html>