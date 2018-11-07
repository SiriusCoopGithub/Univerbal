<header>
    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('admin.index') }}" class="brand-logo">&nbsp{{ config('app.name', 'Laravel') }} Admin
                Dashboard</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @auth
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endauth
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
