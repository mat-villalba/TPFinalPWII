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
    <title>Registrarse</title>
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
        <div class="row justify-content-center">
            <div class="form-loign">
                <h3>Inciar Sesión</h3>
                <form action="confirmacionLogin.php" method="post">
                    <div>
                        <label for="user">Usuario</label>
                        <input class="form-control" type="text" name="user" id="user">
                    </div>
                    <div>
                        <label for="pass">Contraseña</label>
                        <input class="form-control" type="password" name="pass" id="pass">
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn" value="Ingresar">
                    </div>
                </form>
            </div>
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