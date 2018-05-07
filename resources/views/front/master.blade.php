<!doctype html>
<html lang="en">
@include('front.header')
<body>
<header id="header">
    <div class="navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a href="/">
                    <img src="/images/logo.png" alt="">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">首页</a></li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

</body>
@yield('scripts')

</html>