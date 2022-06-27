<?php
/*//enlace a la base de datos
$conect=new mysqli("127.0.0.1","root","","appdb");
if ($conect) {
    echo "se conecto a la db <br>";
}else{
    echo "error en la db <br>";
}
//extrae los valor del formulario
//extract($_POST);

//extraer por separado del formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$tipoUser=$_POST['tipoUser'];

/*if ($edad >= 18) {
    echo "Ud es mayor de Edad";
}else if ($edad < 18) {
    echo "Ud es menor de Edad";
}else if($edad <= 65){
    echo "Ud es Adulto mayor";
}*/

/*$sql="insert into usuarios value('','$nombres','$apellidos','$correo','$tipoUser')";
$resSql=mysqli_query($conect, $sql);
if (!$resSql) {
    echo"error de sentencia sql <br>";
}else{
    echo"se ejecuto correctamente <br>";
}
echo $nombres ." ". $apellidos." ". $correo." ".$tipoUser."<br>";

//$sql="delete from usuarios where id=1";*/

extract($_POST);

include("../dll/config.php");
include("../dll/class_mysqli.php");

$clave = md5($clave);

$miconexion = new clase_mysqli;
$miconexion -> conectar(DBHOST,DBUSER,DBPASS,DBNAME);
$sql="insert into usuarios values ('','$nombres','$apellidos','$correo','$clave','$tipoUser')";
$resSql=$miconexion-> consulta ($sql);
if (!$resSql) {
    echo '<script>alert("SQL Incorrecto...");</script>';
    echo "<script>location.href='contactos.php'</script>";
}else{
    echo '<script>alert("SQL Correcto :) ...");</script>';
    echo "<script>location.href='listado.php'</script>";
}
?>