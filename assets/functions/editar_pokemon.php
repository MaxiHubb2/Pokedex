<?php

    require_once("./db_functions.php");

    if(isset($_POST)){
        $identificador=$_POST['identificador'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $descripcion=$_POST['descripcion'];
        $vida=$_POST['vida'];
        $defensa=$_POST['defensa'];
        $peso=$_POST['peso'];
        $velocidad=$_POST['velocidad'];
        $ataque=$_POST['ataque'];

        $query="UPDATE pokemon SET identificador=$identificador,
        nombre='$nombre',tipo=$tipo,descripcion='$descripcion',
        vida=$vida,defensa=$defensa,peso=$peso,velocidad=$velocidad,
        ataque=$ataque WHERE identificador = $identificador";

        if(ejecutar_query($query)){

            if(isset($_FILES['img']) && $_FILES["img"]["error"] === 0){
                $id=ejecutar_query("SELECT id FROM pokemon WHERE identificador = $identificador",true)[0];

                if($_FILES["img"]["error"] > 0){
                    echo "Error: " . $_FILES["img"]["error"] . "<br />";
                }else{
                    $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                    $destino = "../../uploads/" . $id->id . "." . $extension;
                    move_uploaded_file($_FILES["img"]["tmp_name"],$destino); 
                    $img="$id->id.$extension";
                    ejecutar_query("UPDATE pokemon SET img='$img' WHERE id=$id->id ");
                    header("Location: ../../vistas/busqueda.php");
                    exit();
                }
            }else{
                header("Location: ../../vistas/busqueda.php");
                exit();
            }

        }else echo "error al crear pokemon";
    }else{
        echo "no data";
    }
    
?>


