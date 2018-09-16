<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Icchy Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">

    <div id="wrapper" class="fade-in nav">

        <div id="intro">
            <h1>What is <br />Kenta Ichikawa ?</h1>
            <p>web engineer</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <nav-component></nav-component>
            <ul class="icons">
                <li><a href="https://www.facebook.com/icchy.kenshiro" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/icchy1902/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/k-ichikawa" target="_blank" class="icon fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
        <router-view></router-view>
        </div>

        <!-- Copyright -->
        <div id="copyright">
            <ul><li>&copy; Icchy Profile</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>

</body>
</html>