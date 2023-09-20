<?php

require_once("./db_functions.php");

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repetirPassword'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repetirPassword = $_POST['repetirPassword'];




    $query = "SELECT id FROM usuario WHERE email = '$email' AND password = '$password' AND repetirPassword = '$repetirPassword'";


    if ($usuario = ejecutar_query($query, true)) {
        session_start();
        $_SESSION['id'] = $usuario[1]->id;
        header("Location: ../../vistas/index.php");
        exit();
    } else {
        header("Location: ../../vistas/registro.php");
        exit();
    }
} else {
    echo "no data";
}

?>