<!DOCTYPE HTML>
<html>
<head>
    <title>icchy Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="icchy profile">
    <meta property="og:type" content="website">
    <meta property="og:description" content="icchyのプロフィールです。">
    <meta property="og:url" content="{{ route('app') }}">
    <meta property="og:site_name" content="icchy profile">
    <meta property="og:image" content="{{ asset('images/ogimage.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|EB+Garamond" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="is-preload">
    <div class="nav">
        <div class="head">
            <div class="headInner">
                <div class="headerBox">
                    <div class="siteName">
                        <h1><a href="/">icchy Profile</a></h1>
                    </div>
                </div>
                <div class="navBox">
                    <a href="javascript:void(0)" type="button" id="menuBtn" onclick="$('.menu').slideToggle();">
                        <i class="fas fa-bars"></i>
                    </a>

                    <nav id="nav" class="menu">
                        <nav-component></nav-component>
                    </nav>
                </div>
            </div>
        </div>

        <div id="main">
            <router-view></router-view>
        </div>
    </div>
    <div class="footerBox">
        <div class="footerInner">
            <div class="copyright">
                <p>Copyright &copy icchy Profile
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/nav.js') }}"></script>
</body>
</html>