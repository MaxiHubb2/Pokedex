<?php

require_once("./db_functions.php");

    if(isset($_POST) && isset($_FILES['img'])){
        $identificador=$_POST['identificador'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $descripcion=$_POST['descripcion'];
        $vida=$_POST['vida'];
        $defensa=$_POST['defensa'];
        $peso=$_POST['peso'];
        $velocidad=$_POST['velocidad'];
        $ataque=$_POST['ataque'];

        $query="INSERT INTO pokemon(identificador, nombre, tipo, descripcion, vida, defensa, peso, velocidad, ataque) VALUES
        ($identificador,'$nombre',$tipo,'$descripcion',$vida,$defensa,$peso,$velocidad,$ataque)";

        if(ejecutar_query($query)){
            if($_FILES["img"]["error"] > 0){
                echo "Error: " . $_FILES["img"]["error"] . "<br />";
            }else{
                $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                $destino = "../../uploads/" . $_POST['identificador'] . "." . $extension;
                move_uploaded_file($_FILES["img"]["tmp_name"],$destino); 
                header("Location: ../index.php");
                exit();
            }
        }else echo "error al crear pokemon";
    }else{
        echo "no data";
    }
    
?>


