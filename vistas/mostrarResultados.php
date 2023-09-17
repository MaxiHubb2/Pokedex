<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pokémon</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="\Pokedex\assets\recursos\css\mostrarResultado.css">

</head>
<body>
<div class="container">

    <h1>Resultado de la búsqueda de Pokémon</h1>

    <?php
    foreach ($pokemons as $pokemon) {
        echo '<div class="pokemon-card">'; // Abre una tarjeta de Pokémon
        echo '<img src="' . $pokemon['img'] . '" alt="Imagen de ' . $pokemon['nombre'] . '" class="pokemon-img">';
        echo '<p class="pokemon-text">Nombre: ' . $pokemon['nombre'] . '</p>';
        echo '<p class="pokemon-text">Tipo: ' . $pokemon['tipo'] . '</p>';
        echo '<p class="pokemon-text">Vida: ' . $pokemon['vida'] . '</p>';
        echo '<p class="pokemon-text">Defensa: ' . $pokemon['defensa'] . '</p>';
        echo '<p class="pokemon-text">Peso: ' . $pokemon['peso'] . '</p>';
        echo '<p class="pokemon-text">Velocidad: ' . $pokemon['velocidad'] . '</p>';
        echo '<p class="pokemon-text">Ataque: ' . $pokemon['ataque'] . '</p>';
        echo '</div>'; // Cierra la tarjeta de Pokémon
    }
  
    ?>

</div>
</body>
</html>
