<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Chef Studio" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">

    <?php include 'db.php';
    $isLoggedIn = isLoggedIn();
    
    ?>
    <input type="checkbox" id="hamburger" />
    <label class="menuicon" for="hamburger">
        <span></span>
    </label>
    <div id="bar">
        <div id="logo">
            <a href="#"><img src="img/logo.png" alt="cioccobiscotto" title="cioccobiscotto" height="54"></a>
        </div> <!--/fine logo-->
    </div><!--/fine bar-->

    <nav class="menu-visibility">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="ChiSiamo.php">CHI SIAMO</a></li>
            <li><a class="submenu" href="#">PRODOTTI</a>
                <ul>
                    <li><a href="elencoprodotti.php?prodotto=1">Gelati</a></li>
                    <li><a href="elencoprodotti.php?prodotto=2">Torte</a></li>
                    <li><a href="elencoprodotti.php?prodotto=3">MilkShake</a></li>

                </ul>
            </li>
            
            <li><a class="submenu" href="#">CREA</a>
                <ul>
                    <li><a href="CreaTorta.php">CreaTorta</a></li>
                    <li><a href="CreaGelato.php">CreaGelato</a></li>
                    <li><a href="CreaMilkShake.php">CreaMilkShake</a></li>

                </ul>
            </li>
            <?php if ($isLoggedIn): ?>
                <li><a href="logout.php">LOGOUT</a></li>
            <?php else: ?>
                <li><a class="submenu" href="#">LOGIN</a>
                    <ul>
                        <li><a href="login.php ">LOGIN</a></li>

                        <li><a href="signup.php">SIGNUP</a></li>

                    </ul>
                </li>
            <?php endif; ?>
            <li><a href="cart.php">CARRELLO</a></li>
            <li><a href="CONTATTI.php">CONTATTI</a></li>
            <li class="lingua"><a href="#">Lingua</a>
                <ul>
                    <li><a href="#">It - italiano</a></li>
                    <li><a href="#">Fr - français </a></li>
                    <li><a href="#">En - english</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</head>

</html>