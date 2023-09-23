<?php
    require("db_functions.php");

    if(isset($_POST['identificador'])){
        $identificador = $_POST['identificador'];
        ejecutar_query("DELETE FROM pokemon WHERE identificador = $identificador");
        header("Location: ../../vistas/busqueda.php");
        exit();
    }
?>