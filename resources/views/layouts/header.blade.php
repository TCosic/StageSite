
<header class="top">
    <h1>Tips Fedora &trade;</h1>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('stage.index') }}">Zoek een stage</a></li>
            <li><a href="#">Bedrijven</a></li>
            @if(Auth::check())
                @if(Auth::user()->role_id == 1)
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                @else
                    <li><a id="menu-login-button" href="{{ url('/login') }}">Login</a></li>
                @endif
            @else
                <li><a id="menu-login-button" href="{{ url('/login') }}">Login</a></li>
            @endif
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