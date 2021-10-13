<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GauchoRocket S.A</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
   </head>
   <body class="main-layout">
      <!-- header -->
      <?php
      include_once('header.php');
      ?>
      <!-- end header -->
    <section class="container">
        <div class="row justify-content-center" style="margin: 120px 0;">
<?php

$usuario = $_POST["nombre"];
$password = $_POST["clave"];

session_start();

/*
echo $usuario;
echo "<br>";
echo $password;
echo "<br>";
echo md5($password);
*/

$db = new mysqli("localhost", "root", "", "php_login_database");
if($db->connect_error){
    echo "<h1>ha ocurrido un error: " . $db->connect_error . "</h1>";
}

$message = '';

//Consulto la clave de los usuarios
$consulta = "INSERT INTO users (email, password) VALUES ('$usuario', '$password')";
//$consulta = "SELECT * FROM users where email = ? and password = ?";

$resultado = mysqli_query($db, $consulta);
if(!$resultado){
    echo "<h1>Error al registrarse</h1>";
} else{
    echo "<h1>Usuario registrado exitosamente</h1>";
}

mysqli_close($db);

/*
$comm = $db->prepare($consulta);
$comm->bind_param('ss', $email, $password);

if($comm->execute()){
    $message = 'Usuario creado con éxito';
} else{
    $message = '¡Ups! Ocurrió un error al crear su usuario';
}

echo "<br>";
echo "<a href='validar.php?hash= " . md5(time()) . "'>Validá tu identidad</a>";
echo "<br>";

$comm->close();
*/

//Ejecutando la consulta:
/*$query = $db->query($consulta); 
if($db->error){
    echo "La consulta produjo un error: " . $db->error;
}

//Devuelve resultado:
while($resultado = $query->fetch_assoc()){
    echo $resultado["email"] . "<br>";
}*/
/*
if($usuario == "cacho" && $password == "1234"){
    $_SESSION["nombre"] = $usuario;
} else{
    echo "Le pifiaste a la clave o el user";
}
*/
?>
    </div> 
</section>
<!-- footer -->
<?php
include_once('footer.php');
?>
<!-- end footer -->
</body>

</html>