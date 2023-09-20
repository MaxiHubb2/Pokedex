<?php

    require_once '../assets/functions/db_functions.php';
    require_once '../assets/functions/generarFilaPokemon.php';
    include_once '../assets/functions/consultarPokemon.php';
    $pokemons = obtenerPokemons();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POKEDEX</title>
    <link rel="stylesheet" type="text/css" href="../assets\recursos\css\bootstrap.min.css">
    <link rel="stylesheet" href="../assets\recursos\css\estilos.css">
</head>
<body>

<!--------------------- HEADER -------------------------------->
<header>
    <div class="container">
        <div class="row py-3">
            <div class="col">
                <a href="index.php"><img src="../assets\img\logo\logo.png" width="50" height="50"></a>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">POKEDEX</h1>
            </div>
            <div class="col-md-6 pt-2">
                <form class="d-flex mx-5 col-4" action="login.php" method="post">
                    <input type="text" name="usuario" class="form-control mx-2 col-1" placeholder="usuario">
                    <input type="password" name="password" class="form-control mx-2 col-1" placeholder="contraseña">
                    <button button type="submit" class="btn btn-primary col-6">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</header>

<!--------------------- BUSQUEDA -------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12 py-3">
            <form class="d-flex col" action="" method="post">
                <input type="text" class="form-control" name="buscar" placeholder="Ingrese nombre, tipo o número de Pokémon">
                <button type="submit" class="btn btn-primary" name="boton">¿Quién es este Pokémon?</button>
            </form>
        </div>
    </div>
</div>

<!--------------------- TABLA -------------------------------->

    <div class="table-container">
        <table class="table">
            <tr>
                <th scope="col">Nro</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Vida</th>
                <th scope="col">Defensa</th>
                <th scope="col">Peso</th>
                <th scope="col">Velocidad</th>
                <th scope="col">Ataque</th>
                <th scope="col">Acciones</th> 
            </tr>

        <?php
        if (!empty($pokemons)) {
            foreach ($pokemons as $pokemon) {
                // Llama a la función generarFilaPokemon para generar la fila de Pokémon
                generarFilaPokemon($pokemon);
            }
        } else {
            echo '<tr><td colspan="11" class="text-center">No se encontraron Pokémon.</td></tr>';
            $todosLosPokemons = ejecutar_query("SELECT * FROM pokemon", true);
            if (!empty($todosLosPokemons)) {
                foreach ($todosLosPokemons as $pokemon) {
                    // Llama a la función generarFilaPokemon para generar la fila de Pokémon
                    generarFilaPokemon($pokemon);
                }
            }
        }
        
        ?>
         </table>
     </div>

<script type="text/javascript" src="../assets/recursos/js/bootstrap.min.js"></script>

</body>
</html>
