<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- //Font Awesome -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- //Google Fonts -->

    <link rel ="stylesheet" href="{{ asset("v2/assets/css/style.css") }}">
    <title>RestaurantApp</title>
</head>
<body>
    <header>
        <div class="nav-overlay open"></div>
        <span role="button" class="menu-icon">
                <ion-icon name="menu-outline"></ion-icon>
            </span>
        <a href="../test/index.php" class="logo-wrapper td-none">
            <div><span>OMAR</span>MAHROOS</div>
        </a>

        <nav>
            <ul class="navmenu">
                <h4> <li class="navitem"><a href="index.php">HOME</a></li></h4>
                <h4> <li class="navitem"><a href="about.php">ABOUT</a></li></h4>
                <li class="navitem">
                    <h4><a href="#">SERVICES <ion-icon name="chevron-down-outline" class="navicon"></ion-icon></a></h4>
                    <ul class="dropdown">
                        <h4><li><a href="../application library">BEST SERVICES 2022</a></li></h4>
                        <h4><li><a href="../bootstrap-5.2.0-beta1-dist">BEST SERVICES 2021 </a></li></h4>
                        <h4><li><a href="../blog">BEST SERVICES 2020 </a></li></h4>
                        <h4><li><a href="../base">BEST SERVICES 2019 </a></li></h4>
                    </ul>
                </li>
                <?php
                if(isset($_SESSION["id"])) {
                    ?>
                <h4><li class="navitem"><a href="index.php"><?php echo strtoupper($_SESSION["username"]); ?></a></li></h4>
                <h4><li class="navitem"><a href="includes/logout.inc.php">LOGOUT</a></li></h4>
                    <?php
                } else {
                    ?>
                    <!--<h4><li class="navitem"><a href="register.php">SIGN UP</a></li></h4>
                          <h4><li class="navitem"><a href="login.php">LOGIN</a></li></h4>-->
                    <?php
                }
                ?>
            </ul>

        </nav>
    </header>

    <div class="row">
        <div class="col-md-4">
            omar Abdullah
        </div>

        <div class="col-md-4">
            omar Abdullah
        </div>

        <div class="col-md-4">
            omar Abdullah
        </div>
    </div>
</body>
</html>
