<?php
require_once '../assets/functions/db_functions.php';
require_once '../assets/functions/generarFilaPokemon.php';
require_once '../assets/functions/consultarPokemon.php';
require_once "../assets/functions/auth.php";

if (isset($_POST['buscar'])) {
    $pokemons = obtenerPokemons($_POST['buscar']);
} else {
    $pokemons = obtenerPokemons('');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="../assets/recursos/css/estilos.css">
</head>
<body>
<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo-container">
            <a href="busqueda.php">
                <img src='../assets/img/logo/logo.png' alt="Logo" class="logo">
            </a>
            <h1>POKEDEX</h1>
        </div>
        <div class="logout-button">
            <form action="../assets/functions/logout.php" method="post">
                <button type="submit">Salir de la sesion</button>
            </form>
        </div>
    </div>

    <div class="container">
        <form class="search-form d-flex" action="" method="post">
            <input type="text" class="form-control" name="buscar" placeholder="Ingresa el nombre del Pokémon">
            <button type="submit" class="btn btn-primary" name="boton">¿Quién es este Pokémon?</button>
        </form>
    </div>
</header>


<div class="container">
        <?php
        if (empty($pokemons)) {
            echo '<p class="text-center mt-3">No se encontraron Pokémon.</p>';
        }
        ?>

        <div class="grid-container">
            <?php
            if (!empty($pokemons)) {
                foreach ($pokemons as $pokemon) {
                    generarTarjetaPokemon($pokemon);
                }
            } else {
                $todosLosPokemons = ejecutar_query("SELECT * FROM pokemon", true);
                if (!empty($todosLosPokemons)) {
                    foreach ($todosLosPokemons as $pokemon) {
                        generarTarjetaPokemon($pokemon);
                    }
                }
            }
            ?>
       </div>
    </div>
</body>
</html>

