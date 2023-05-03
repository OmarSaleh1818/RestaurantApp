
<div class="nav-overlay open"></div>
<span role="button" class="menu-icon">
                <ion-icon name="menu-outline"></ion-icon>
            </span>
<a href="../test/index.php" class="logo-wrapper td-none">
    <div><span>OMAR</span>Abdullah</div>
</a>

<nav>
    <ul class="navmenu">
        <h4> <li class="navitem"><a href="index.php">HOME</a></li></h4>
        <h4> <li class="navitem"><a href="about.php">ABOUT</a></li></h4>
        <li class="navitem">
            <h4><a href="#">{{ Auth::user()->name }} </a></h4>

        </li>
    </ul>

</nav>
