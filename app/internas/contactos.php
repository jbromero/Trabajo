<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forja de los Griegos</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <div class="">
            <h1>Forja de los Griegos</h1>
        </div>
        <div>
            <h3>Buscador</h3>
        </div>
    </header>
    <nav class="menuPrincipal">
        <a href="../">Inicio</a>
        <a href="../prueba.php">Empresa</a>
        <a href="contactos.php">Registro</a>
        <a href="listado.php">Lista</a>
        <a href="login.php">Login</a>
    </nav>
    <main>
        <div class="boxCentrado">
            <h2 class="h2Home">Contactos</h2>
            <form method="post" action="procesar.php">
                <div class="grupoImput">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
            </div>
            <div class="grupoImput">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
            </div>
            <div class="grupoImput">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="grupoImput">
                <label for="clave">Clave</label>
                <input type="password" name="clave" id="clave" placeholder="Ingrese su contraseña">
            </div>
            <div class="grupoImput">
                <label for="edad">Tipo Usuario</label>
                <select name="tipoUser" id="tipoUser">
                    <option> -- </option>
                    <option value="1">Administrador</option>
                    <option value="2">Visitante</option>
                </select>
            </div>
            <div class="grupoImput">
                <button type="submit" value="Procesar" class="btn-submit">Prosecar</button>
            </div>
        </form>
        </div>
        
    </section>
    <footer class="piePagina"><h6>Derechos reservados 2022</h6></footer>
</body>
</html>