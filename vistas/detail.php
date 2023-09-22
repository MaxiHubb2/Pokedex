<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
<?php
    require_once("../assets/functions/obtenerDetalle.php");
    
    echo '<div>';
    echo '<div>';
    echo "<h3>$_pokemon->nombre</h3>";
    echo '<img src="../uploads/' . $_pokemon->img . '" alt="' . $_pokemon->nombre . '" width="50" height="50"/>';
    echo '</div>';
    echo '<div>';
    echo "<h3>$_pokemon->tipo</h3>";
    echo '</div>';
    echo '<div>';
    echo "<p>$_pokemon->descripcion</p>";
    echo '</div>';
    echo '<div>';
    echo "<h2>Vida: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->vida' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Defensa: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->defensa' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Ataque: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->ataque' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Peso: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->peso' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Velocidad: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->velocidad' low='40' high='150' optimun='200'></meter>";
    echo '</div>';
    echo '</div>';
?>
</body>
</html>