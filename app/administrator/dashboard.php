<?php
include("seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Sistema</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header class="cabeceraDashboard">
        <div class="">
            <h1>Forja de los Griegos</h1>
        </div>
        <div>
            <h3>Usuario <?php echo $_SESSION['username'];?></h3>
        </div>
    </header>
    <aside class="side">
        <nav class="menuDashboard">
            <a href="">Dashboard</a>
            <a href="">Encuesta</a>
            <a href="">Resultados</a>
            <a href="">Recomendaciones</a>
            <a href="">Mi Perfil</a>
            <a class="Salir" href="seguridad/exit.php?salir=true"> Cerrar Seccion </a>
        </nav>
        <!--<h2> <a class="Salir" href="seguridad/exit.php?salir=true"> Cerrar Seccion </a></h2>-->
    </aside>
    <main>
        <section class="contenedor">
            <h3>Forja de los Griegos</h3>
            <div>
                <h3>Encuesta</h3>
                <img src="" alt="">
                <img src="" alt="">
            </div>
            <div>
                <h3>Resultados</h3>
            </div>
            <div>
                <h3>Lista de Usuarios</h3>
                <?php
                    $miconexion = new clase_mysqli;
                    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
                    $miconexion->consulta("select id 'CODIGO', nombres NOMBRES, apellidos APELLDIOS, correo CORREO from usuarios");
                    $miconexion->verconsulta();
                ?>
            </div>
        </section>
    </main>
    <footer class="piePagina">
        <section class="partner">
			<img src="" alt="">
			<img src="" alt="">
		</section>
        <h6>Derechos reservados 2022</h6>
    </footer>
</body>
</html>