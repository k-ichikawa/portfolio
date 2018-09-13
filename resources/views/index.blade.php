<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Massively by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>What is <br />Kenta Ichikawa?</h1>
        <p>web engineer</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <header id="header">
        <a href="index.html" class="logo">ABOUT</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="index.html">About</a></li>
            <li><a href="generic.html">Works</a></li>
            <li><a href="generic.html">Hobby</a></li>
            <li><a href="elements.html">Contact</a></li>
        </ul>
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <article>
            <h2>PROFILE</h2>
            <h3>市川 健太 (イチカワ ケンタ)</h3>
            <p>93年2月生まれ、B型、千葉県出身、神奈川県在住。<br />"イッチー", "ケンシロー"などと呼ばれている。</p>
            <a class="image main"><img src="{{ asset('images/profile.jpg') }}" alt="profile" /></a>
        </article>

        <article>
            <h2>BIOGRAPHY</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2011/04 <br>~ 2016/03</td>
                            <td>専修大学<br />経営学部 経営学科</td>
                            <td>マーケティング × ITを研究するゼミに所属。趣味でサークルの立ち上げ等。<br />友人に教えてもらいながら独学でプログラミングを学ぶ。</td>
                        </tr>
                        <tr>
                            <td>2014/08 <br>~ 2015/07</td>
                            <td>株式会社ココラブル<br />インターンシップ</td>
                            <td>分析・企画職として入社。分析効率化のためプログラミングを勉強し実践。</td>
                        </tr>
                        <tr>
                            <td>2016/04 ~ </td>
                            <td>アライドアーキテクツ株式会社<br />エンジニア職</td>
                            <td>ユーザーグロース、システム運用、新規サービス開発に従事。</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <article>
            <h2>SKILL</h2>
            <div class="row">
                <div class="col-6 col-12-small">
                    <h3>work</h3>
                    <ul>
                        <li>PHP（Laravel）</li>
                        <li>Vue.js</li>
                        <li>jQuery</li>
                    </ul>
                </div>
                <div class="col-6 col-12-small">
                    <h3>hobby</h3>
                    <ul>
                        <li>Ruby（Rails）</li>
                        <li>Google Apps Script</li>
                    </ul>
                </div>
            </div>
        </article>
    </div>

    <!-- Footer -->
    {{--<footer id="footer">--}}
        {{--<section>--}}
            {{--<form method="post" action="#">--}}
                {{--<div class="fields">--}}
                    {{--<div class="field">--}}
                        {{--<label for="name">Name</label>--}}
                        {{--<input type="text" name="name" id="name" />--}}
                    {{--</div>--}}
                    {{--<div class="field">--}}
                        {{--<label for="email">Email</label>--}}
                        {{--<input type="text" name="email" id="email" />--}}
                    {{--</div>--}}
                    {{--<div class="field">--}}
                        {{--<label for="message">Message</label>--}}
                        {{--<textarea name="message" id="message" rows="3"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="actions">--}}
                    {{--<li><input type="submit" value="Send Message" /></li>--}}
                {{--</ul>--}}
            {{--</form>--}}
        {{--</section>--}}
        {{--<section class="split contact">--}}
            {{--<section class="alt">--}}
                {{--<h3>Address</h3>--}}
                {{--<p>1234 Somewhere Road #87257<br />--}}
                    {{--Nashville, TN 00000-0000</p>--}}
            {{--</section>--}}
            {{--<section>--}}
                {{--<h3>Phone</h3>--}}
                {{--<p><a href="#">(000) 000-0000</a></p>--}}
            {{--</section>--}}
            {{--<section>--}}
                {{--<h3>Email</h3>--}}
                {{--<p><a href="#">info@untitled.tld</a></p>--}}
            {{--</section>--}}
            {{--<section>--}}
                {{--<h3>Social</h3>--}}
                {{--<ul class="icons alt">--}}
                    {{--<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>--}}
                    {{--<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>--}}
                    {{--<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>--}}
                    {{--<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>--}}
                {{--</ul>--}}
            {{--</section>--}}
        {{--</section>--}}
    {{--</footer>--}}

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

</body>
</html>