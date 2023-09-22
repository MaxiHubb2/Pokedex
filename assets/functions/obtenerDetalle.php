<?php
    require("db_functions.php");

 
    if(isset($_GET['identificador'])){
        $identificador = $_GET['identificador'];
    
        $query = "SELECT * FROM pokemon WHERE identificador = $identificador";
        
        if($pokemon = ejecutar_query($query, true)){
           $_pokemon = $pokemon[0];
        }
            
    }