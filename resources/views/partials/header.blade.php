<header>
    <nav>
        <ul>
            <li><a href="{{ url('home') }}">Main Page</a></li>
            <li><a href="{{ url('author') }}">Author</a></li>
            <li><a href="{{ url('admin') }}">Admin</a></li>
            <span id="separator"></span>
            @if(!Auth::check())
                <li><a href="{{ url('register') }}">Register</a></li>
                <li><a href="{{ url('login') }}">Log In</a></li>
            @else
                <li><a href="{{ url('logout') }}">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>