{{-- <div class="navbar-fixed">
    <nav class="menu">
        <div class="nav-wrapper">
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
</div> --}}

{{-- <div class="logo-dashboard ">
    <a href="{{ route('admin.index') }}" class="brand-logo left">
        <img class="logo-img" src="../img/logo.png" alt="">
        <p class="univerbal">UNIVERBAL</p>
        <p class="univerbal-social">Interprétariat Social</p>
    </a>
</div> --}}

<header>
    <div class="menu">
        <div class="menu-navbar clearfix">
            <span class="search-input-container">
                <i class="fas fa-search menu-navbar-i"></i>
                <input type="text" class="menu-navbar-search" placeholder="Rechercher un interprète, une institution, un intervenant" />
            </span>

            <ul id='dropdown1' class="menu-navbar-ul ">
                @auth
                <li>
                    <span>{{ Auth::user()->name }}</span>
                </li>
                <li>
                    <a class="waves-effect waves-teal btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</header>
<div class="logo-dashboard">
    <a href="{{ route('admin.index') }}">
        <div class="logo-img">
            <img src="../img/logo.png" alt="">
        </div>

        <div class="univerbal">
            <p>UNIVERBAL</p>
            <p class="univerbal-social">Interprétariat Social</p>
        </div>
    </a>
</div>


{{-- <div class="col s12 m8 l10">

    <span class="left hide-on-med-and-down">
        <i class="">Dashboard</i>
    </span>

    <ul id="nav-mobile" class=" right hide-on-med-and-down">
        @auth
        <li>
            {{ Auth::user()->name }}
        </li>
        <li>
            <a class="waves-effect waves-teal btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endauth

</div> --}}
