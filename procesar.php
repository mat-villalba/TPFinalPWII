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
      <!-- loader  -->
      <div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/plane-img.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href='index.php'>Home</a> </li>
                                 <li><a href="#travel">Travel</a></li>
                                 <li><a href='registro.php'>Iniciar sesión</a></li>
                                 <li> <a href="#about">Sobre nosotros</a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
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
    echo "ha ocurrido un error: " . $db->connect_error;
}

$message = '';

//Consulto la clave de los usuarios
$consulta = "INSERT INTO users (email, password) VALUES ('$usuario', '$password')";
//$consulta = "SELECT * FROM users where email = ? and password = ?";

$resultado = mysqli_query($db, $consulta);
if(!$resultado){
    echo "Error al registrarse";
} else{
    echo "Usuario registrado exitosamente";
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
<footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>Sede central</h3>
                        <span>Florencio Varela 1903<br>San Justo<br>
                        Buenos Aires, Argentina<br>
                        4480-8900</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>Links adicionales</h3>
                        <ul class="link">
                           <li> <a href="#">Sobre nosotros</a></li>
                           <li> <a href="#">Terminos y condiciones</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3> Contacto</h3>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Name" type="text">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Email" type="text">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                           </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
</body>

</html>