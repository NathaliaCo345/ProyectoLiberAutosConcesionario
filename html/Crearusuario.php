<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <header>
        <img class="logo" src="../img/LOGOTIPO_EN_GRIS_2-removebg-preview (1).png" alt="">
        <nav class="navigation">
            <a href="#">INVENTARIO</a>
            <a href="#">VENTAS</a>
            <a href="#">MANTENIMIENTO</a>
            <a href="#">PQRS</a>
            <button class="login"><ion-icon name="person"></ion-icon></button>
        </nav>
    </header>

    <div class="container">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box register">
            <h2>REGISTRAR</h2>
            <form action="conexion.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>Nombre Usuario</label>
                <div>
                    <div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail-sharp"></ion-icon></span>
                            <input type="email" required>
                            <label>Correo</label>
                        </div>
                    </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <button type="submit" class="btn">REGISTRAR</button>
                <div class="login-register">
                    <p>¿Ya tienes cuenta?<a href="../html/login.html" class="login-link"> Login</a></p>
                </div>
                </div>
                </div>
            </form>
    </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>