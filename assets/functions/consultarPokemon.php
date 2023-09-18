<?php
    require_once("db_functions.php");


    function obtenerPokemons() {
        $pokemons = array();
        $where = "";
        if(isset($_POST['buscar']) && $_POST['buscar']!= ""){
            $buscar = $_POST['buscar'];
            $where = " AND nombre LIKE '$buscar'";
        }
        
        if($_pokemons = ejecutar_query("SELECT * FROM pokemon WHERE 1 $where",true)){
            $pokemons= $_pokemons;
        }

        return $pokemons;
    }
?>
