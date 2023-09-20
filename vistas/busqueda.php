<?php

    require_once '../assets/functions/db_functions.php';
    include_once '../assets/functions/consultarPokemon.php';
    require_once("../assets/functions/auth.php");
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
            <div class="col-md-3">
                <a href="index.php"><img src="../assets\img\logo\logo.png" width="50" height="50"></a>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">POKEDEX</h1>
            </div>
            <div class="col-md-6 pt-2">
                <form class="d-flex mx-5 justify-content-end" action="../assets/functions/logout.php" method="post">
                    <button button type="submit" class="btn btn-danger col-6">Salir</button>
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
<table class="table container">
    <thead class="text-center">
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
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($pokemons)) {
        foreach ($pokemons as $pokemon) {
            echo '<tr>';
            echo '<th scope="row">' . $pokemon->identificador . '</th>';
            echo '<td>' . $pokemon->nombre . '</td>';
            echo '<td><img src="../uploads/' . $pokemon->img . '" alt="' . $pokemon->nombre . '" width="50" height="50"></td>';
            echo '<td>' . $pokemon->tipo . '</td>';
            echo '<td>' . $pokemon->descripcion . '</td>';
            echo '<td>' . $pokemon->vida . '</td>';
            echo '<td>' . $pokemon->defensa . '</td>';
            echo '<td>' . $pokemon->peso . '</td>';
            echo '<td>' . $pokemon->velocidad . '</td>';
            echo '<td>' . $pokemon->ataque . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="10" class="text-center">No se encontraron Pokémon.</td></tr>';
    }
    ?>
    </tbody>
</table>

<script type="text/javascript" src="../assets/recursos/js/bootstrap.min.js"></script>

</body>
</html>
