<?php
session_start();
if(!isset($_SESSION["nombre"])){
    header("Location: index.php");
    exit();
} else{
    echo "Hola, estás logueado y te llamás " . $_SESSION["nombre"];
}

?>