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
        <div class = "boxCentrado">
            <h2 class="h2Home"> Lista de Usuarios</h2>
            <?php
                include("../dll/config.php");
                include("../dll/class_mysqli.php");
                
                $miconexion = new clase_mysqli;
                $miconexion -> conectar(DBHOST,DBUSER,DBPASS,DBNAME);
                $miconexion -> consulta ("select id 'CODIGO' , nombres NOMBRES, apellidos APELLIDOS, correo CORREO from usuarios");
                $miconexion -> verconsulta();
            ?>
        </div>
    </section>
    <footer class="piePagina"><h6>Derechos reservados 2022</h6></footer>
</body>
</html>