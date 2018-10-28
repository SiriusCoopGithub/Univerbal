<nav>
    <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo">&nbsp{{ config('app.name', 'Laravel') }}</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}/app/client">Client</a></li>
            <li><a href="{{ url('/') }}/app/client-profile">client-profile</a></li>
            <li><a href="{{ url('/') }}/app/client-options">client-options</a></li>
            <li><a href="{{ url('/') }}/app/interprete">Interprete</a></li>
            <li><a href="{{ url('/') }}/app/interprete-profile">Interprete-profile</a></li>
            <li><a href="{{ url('/') }}/app/interprete-options">Interprete-options</a></li>
            <li><a href="{{ url('/') }}/app/mdp">MDP</a></li>
            <li><a href="{{ url('/') }}/app/mdp-profile">MDP-profile</a></li>
            <li><a href="{{ url('/') }}/app/mdp-options">MDP-options</a></li>
            <li><a href="{{ url('/') }}/app/login">Login</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ url('/') }}/app/client">Client</a></li>
    <li><a href="{{ url('/') }}/app/client-profile">client-profile</a></li>
    <li><a href="{{ url('/') }}/app/client-options">client-options</a></li>
    <li><a href="{{ url('/') }}/app/interprete">Interprete</a></li>
    <li><a href="{{ url('/') }}/app/interprete-profile">Interprete-profile</a></li>
    <li><a href="{{ url('/') }}/app/interprete-options">Interprete-options</a></li>
    <li><a href="{{ url('/') }}/app/mdp">MDP</a></li>
    <li><a href="{{ url('/') }}/app/mdp-profile">MDP-profile</a></li>
    <li><a href="{{ url('/') }}/app/mdp-options">MDP-options</a></li>
    <li><a href="{{ url('/') }}/app/login">Login</a></li>
</ul>
