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
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div id="row-navabr" class="row">
                {{-- <div class="col s12 m4 l12"> --}}
                    <div class="row">

                        <div class="col s12 m4 l2">
                            <div class="row">
                                <a href="{{ route('admin.index') }}" class="brand-logo">
                                    <div class="col s12 m4 l12">
                                        <div class="logo-dashboard">
                                            <div class="logo-img">
                                                {{-- <img src="../img/logo.png" alt=""> --}}
                                            </div>
                                        </div>
                                        <div class="col s12 m4 l12">
                                            <div class="univerbal">
                                                <p>UNIVERBAL</p>
                                                <p class="univerbal-social">Interprétariat Social</p>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col s12 m8 l10">

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

                        </div>
                    </div>


                    {{-- </div> --}}

            </div>
        </div>
    </nav>
</div>
