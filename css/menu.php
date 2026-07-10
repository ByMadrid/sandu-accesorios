<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar-custom">
            <div class="nav-container">
                <a href="index.php" class="logo">
                    <img src="img/icono.png" alt="logo proyecto">
                    <span>SANDU</span>
                </a>
                <ul class="nav-menu">
                    <li><a href="index.php" class="active">INICIO</a></li>
                    <li><a href="#">NOSOTROS</a></li>
                    <li><a href="#">GALERÍA</a></li>
                    <li><a href="#">CONTACTOS</a></li>
                    
                    <?php
                    session_start();
                    if(!$_SESSION){
                        $_SESSION["tipo"]=0;
                    }
                    if($_SESSION["tipo"]==0){?>
                        <li><a href="iniciar.php" class="btn-login">INICIAR</a></li>
                    <?php
                    }else { ?>
                        <li><a href="cerrar.php" class="btn-login">CERRAR</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>