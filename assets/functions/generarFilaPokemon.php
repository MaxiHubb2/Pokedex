<?php
function generarTarjetaPokemon($pokemon) {
    // Consulta para obtener el nombre del tipo y su color de fondo desde la tabla tipos_pokemon
    $resultado = ejecutar_query("SELECT tp.nombre, tp.color_fondo FROM tipos_pokemon tp JOIN pokemon p ON p.tipo_id = tp.id WHERE p.id = $pokemon->id", false);

    // Comprueba si la consulta se ejecutó correctamente
    if ($resultado) {
        // Obtiene el nombre del tipo y su color de fondo
        $fila = mysqli_fetch_assoc($resultado);
        $tipoPokemon = $fila['nombre'];
        $colorFondo = $fila['color_fondo'];

        // Comienza a construir la tarjeta Pokémon con el color de fondo
        echo '<div class="pokemon-card" style="background-color: white ' . $colorFondo . ';">';
        echo '<div class="pokemon-name" style="color: black;">' . $pokemon->nombre . '</div>'; 
        echo '<div class="pokemon-image-container">';
        echo '<img class="pokemon-image" src="../uploads/' . $pokemon->img . '" alt="' . $pokemon->nombre . '">';
        echo '</div>';
        echo '<div class="pokemon-details">';
        echo '<div class="pokemon-type" style="color: white; background-color: ' . $colorFondo . '; margin-top: 10px;">Tipo: ' . $tipoPokemon . '</div>';
        echo '</div>';
        echo '<div class="btn-group mt-2" role="group">';
        echo '<a href="editar-pokemon.php?identificador=' . $pokemon->identificador . '" class="btn btn-custom-primary">Modificar</a>';
        echo '<a href="eliminar-pokemon.php?identificador=' . $pokemon->identificador . '" class="btn btn-custom-danger">Eliminar</a>';
        echo '</div>';
        echo '</div>';
    } else {
        // Maneja el caso en que la consulta no se haya ejecutado correctamente
        echo 'Error en la consulta SQL';
    }
}




?>
