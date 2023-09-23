<?php
    require("db_functions.php");

    try{
        if(isset($_POST['identificador'])){
            $identificador = $_POST['identificador'];
            $img=ejecutar_query("SELECT img FROM pokemon WHERE identificador = $identificador",true)[0]->img;
            if(ejecutar_query("DELETE FROM pokemon WHERE identificador = $identificador")){
                unlink("../../uploads/$img");
                header("Location: ../../vistas/busqueda.php");
                exit();
            }else throw new error ("Error al eliminar pokémon de la db");
        }
    }catch(Exception $e){
        throw new error("Error al eliminar pokémon");
    }
?>