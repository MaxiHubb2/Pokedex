<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pokémon</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="\Pokedex\assets\recursos\css\mostrarResultado.css">
    <link rel="stylesheet" href='\Pokedex\assets\recursos\css\estilos.css'>

</head>
<body>
<div class="container">

<?php
include_once 'conexion.php';

$todosLosPokemons = Array(); // Inicializa el array para contener todos los Pokémon

if (isset($_GET['buscar'])) {
    $nombrePokemon = $_GET['buscar'];
    $sql = "SELECT * FROM pokemon WHERE nombre LIKE '%$nombrePokemon%' ORDER BY id";
    $result = $con->query($sql);
    $pokemons = Array();

    if (mysqli_num_rows($result) > 0) {
        while ($fila = mysqli_fetch_assoc($result)) {
            $pokemon = Array();
            $pokemon['id'] =  $fila["id"];
            $pokemon['nombre'] =  $fila["nombre"];
            $pokemon['img'] =  $fila["img"];
            $pokemon['tipo'] =  $fila["tipo"];
            $pokemon['descripcion'] =  $fila["descripcion"];
            $pokemon['vida'] =  $fila["vida"];
            $pokemon['defensa'] =  $fila["defensa"];
            $pokemon['peso'] =  $fila["peso"];
            $pokemon['velocidad'] =  $fila["velocidad"];
            $pokemon['ataque'] =  $fila["ataque"];
            $pokemons[] = $pokemon;
        }
    }

    // Verificar si se encontraron resultados
    if (count($pokemons) > 0) {
        include 'mostrarResultados.php'; // Incluye el archivo para mostrar los resultados
    } else {
        // Acción específica cuando no se encuentran Pokémon
        echo'<h1>Resultado de la búsqueda de Pokémon</h1>';
        echo '<p class="error-message">No se encontraron Pokémon con el nombre o tipo buscado.</p>';
        $sqlTodos = "SELECT * FROM pokemon ORDER BY id";
        $resultTodos = $con->query($sqlTodos);

        if (mysqli_num_rows($resultTodos) > 0) {
            while ($filaTodos = mysqli_fetch_assoc($resultTodos)) {
                echo '<div class="pokemon-card">'; // Abre una tarjeta de Pokémon
                echo '<img src="' . $filaTodos['img'] . '" alt="Imagen de ' . $filaTodos['nombre'] . '" class="pokemon-img">';
                echo '<p class="pokemon-text">Nombre: ' . $filaTodos['nombre'] . '</p>';
                echo '<p class="pokemon-text">Tipo: ' . $filaTodos['tipo'] . '</p>';
                echo '<p class="pokemon-text">Vida: ' . $filaTodos['vida'] . '</p>';
                echo '<p class="pokemon-text">Defensa: ' . $filaTodos['defensa'] . '</p>';
                echo '<p class="pokemon-text">Peso: ' . $filaTodos['peso'] . '</p>';
                echo '<p class="pokemon-text">Velocidad: ' . $filaTodos['velocidad'] . '</p>';
                echo '<p class="pokemon-text">Ataque: ' . $filaTodos['ataque'] . '</p>';
                echo '</div>'; // Cierra la tarjeta de Pokémon
            }
        }
    }
} else {
    // Si no se envió una búsqueda, mostrar todos los Pokémon
    include 'mostrarResultados.php'; // Incluye el archivo para mostrar todos los Pokémon
}
?>
</div>
</body>
</html>
