<?php

    require_once("db_functions.php");    
    session_start();

    if(isset( $_SESSION['id'] )){
        $id = $_SESSION['id'];
        if($usuario = ejecutar_query("SELECT * FROM usuario WHERE id = $id",true)[0]) return true;
        else{
            header("Location: ../vistas/login.php");
            exit();
        }    
    }else{
        header("Location: ../vistas/login.php");
        exit();
    }


?>