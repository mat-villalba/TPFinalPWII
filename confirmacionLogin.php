<?php

$servername = 'Localhost';
$username = 'root';
$dbpassword = '';
$bdname = 'php_login_database';
session_start();
$err = [];

if($_POST['user'] == "" || $_POST['pass'] == ""){
    array_push($err, "Llenar todos los campos");
}

$db = new mysqli($servername, $username, $dbpassword, $bdname);

if($db->connect_error){
    array_push($err, "Ha ocurrido un error: ". $db->connect_error);
}

$query = "SELECT * FROM users WHERE email = ? AND password = ?";

$conn = $db->prepare($query);

$conn->bind_param("ss", $_POST['user'], $_POST['pass']);
$conn->execute();
$resultado = $conn->get_result();
$fila = $resultado->fetch_assoc();

if(!$fila){
    array_push($err, "Usuario o clave incorrecto");
}

$db->close();

?>
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
    <title>Confirmacion Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- customstyle css -->
    <link rel="stylesheet" href="css/customStyle.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
</head>
<!-- body -->
<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <!-- end loader -->
    <!-- header -->
    <?php
    include_once('header.php');
    ?>
    <!-- end header -->
    <section class="container">
        <div class="row justify-content-center" style="margin: 120px 0;">
            <?php
            if(count($err) > 0){
                echo "<h1 class='text-center col-sm-12'>".$err[0]."</h1>";
            }else{
                $usuario = $_POST['user'];
                $password = $_POST['pass']; 
                $_SESSION['usuario'] = $usuario;
                echo "<h1 class='text-center col-sm-12'>Usuario: ". $_SESSION['usuario'] ."</h1>";
                echo "<h1 class='text-center col-sm-12'>Estas logueado</h1>";
            }
            ?>
        </div> 
    </section>
    <!-- footer -->
    <?php
    include_once('footer.php');
    ?>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>
</body>
</html>