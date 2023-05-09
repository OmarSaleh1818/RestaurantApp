
<div class="nav-overlay open"></div>
<span role="button" class="menu-icon">
                <ion-icon name="menu-outline"></ion-icon>
            </span>
<a href="{{ url('dashboard') }}" class="logo-wrapper td-none">
    <div><span>OMAR</span>Abdullah</div>
</a>

<nav>
    <ul class="navmenu">
        <h4> <li class="navitem"><a href="{{ url('dashboard') }}">HOME</a></li></h4>
        <h4> <li class="navitem"><a href="{{ url('about') }}">ABOUT</a></li></h4>
        <li class="navitem">
            <h4><a href="{{ url('dashboard') }}">{{ Auth::user()->name }} </a></h4>

        </li>
    </ul>

</nav>
