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

        $query="INSERT INTO pokemon(identificador, nombre, tipo, descripcion, vida, defensa, peso, velocidad, ataque, img) VALUES
        ($identificador,'$nombre',$tipo,'$descripcion',$vida,$defensa,$peso,$velocidad,$ataque)";

        if($id=ejecutar_query($query,false,true)){
            if($_FILES["img"]["error"] > 0){
                echo "Error: " . $_FILES["img"]["error"] . "<br />";
            }else{
                $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                $destino = "../../uploads/" . $_POST['id'] . "." . $extension;
                move_uploaded_file($_FILES["img"]["tmp_name"],$destino); 
                $img="$id.$extension";
                ejecutar_query("UPDATE pokemon SET img='$img' WHERE id=$id ");
                header("Location: ../../vistas/busqueda.php");
                exit();
            }
        }else echo "error al crear pokemon";
    }else{
        echo "no data";
    }
    
?>


