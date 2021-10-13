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
      <!-- customstyle css -->
      <link rel="stylesheet" href="css/customStyle.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
   </head>
   <body class="main-layout">
      <!-- loader  -->
      <div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <?php
      include_once('header.php');
      ?>
      <!-- end header -->
      <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
        <?php endif; ?>

      <section class="container">
        <div class="row justify-content-center">
            <div class="form-loign">
               <h3>Registrarse</h3>
               <form action="procesar.php" method="post" enctype="application/x-www-form-urlencoded">
                  <div>
                     <label for="nombre">Nombre</label>
                     <input class="form-control" type="text" name="nombre" id="nombre">
                  </div>
                  <div>
                     <label for="clave">Clave</label>
                     <input class="form-control" type="password" name="clave" id="clave">
                  </div>
                  <div class="row justify-content-center">
                     <input type="submit" class="btn" name="Enviar"> 
                  </div>
               </form>
            </div>
        </div> 
    </section>
    <!-- footer -->
    <?php
    include_once('footer.php');
    ?>
   <!-- end footer -->
</body>

</html>