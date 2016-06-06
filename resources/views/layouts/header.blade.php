
<header class="top">
    <h1>Tips Fedora &trade;</h1>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('stage.index') }}">Zoek een stage</a></li>
            <li><a href="#">Bedrijven</a></li>
            <li><a id="menu-login-button" href="{{ url('/login') }}">Login</a></li>
        </ul>
        {{Auth::user()}}
    </nav>
    <div id="login-background"></div>
    <div id="login-box">
        <a href="" id="close-button">X</a>
        <div id="sub-container">
            <div id="loginForm">@include('auth.login')</div>
            <div id="registerForm">@include('auth.register')</div>
        </div>
    </div>
</header>