<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROUTE BIKES</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,
    100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="<?php echo constant('URL'); ?>views/login/css/estiloslogin.css">
</head>

<body>
    <h1>ROUTE BIKES</h1>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿ya tiene una cuenta ?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿aun no tienes una cuenta ?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form
                    action="<?php echo constant('URL');?>login/verificar"
                    method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="contraseñar" name="password">
                    <button name="action" value="login">Entrar</button>
                </form>

                <form
                    action="<?php echo constant('URL')?>login/registro"
                    method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombres" name="nombres" required>
                    <input type="text" placeholder="apellidos" name="apellido" required>
                    <input type="text" placeholder="codigo estudiantil" name="codigo" required>
                    <input type="email" placeholder="Correo electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button name="action" value="registro">Registrarse</button>
                </form>

            </div>
        </div>
    </main>
    <script
        src="<?php echo constant('URL'); ?>views/login/js/script.js">
    </script>
</body>

</html>