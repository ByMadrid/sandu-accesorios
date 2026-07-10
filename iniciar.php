<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESION</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/icono.png">
</head>
<body>
   <?php include "menu.php"?>
   
    <main class="content-area">
        <form action="validarinicio.php" method="POST">
            <section>
                <h2>INICIAR SESION</h2>
            </section>
            <div>
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" name="usuario" id="usuario" requiered placeholder="Escribe Tu Nombre">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required placeholder="Digita Tu Contraseña">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            </div>
            <div>
                <a href="recordarpass.php">¿Olvidaste Tu Contraseña?</a>
            </div>
            <div>
                <a href="registro.php">Registrarse</a>
            </div>   
        </form>
    </main>
</body>
</html>