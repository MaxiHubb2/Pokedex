<?php


function generarFilaPokemon($pokemon) {
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
    
    // Agregar botones de Modificar y Eliminar con estilo Bootstrap
    echo '<td>';
    echo '<div class="btn-group" role="group">';
    echo '<a href="editar-pokemon.php?identificador=' . $pokemon->identificador . '" class="btn btn-primary m-1">Modificar</a>';
    echo '<a href="eliminar-pokemon.php?identificador=' . $pokemon->identificador . '" class="btn btn-danger m-1">Eliminar</a>';
    echo '</div>';
    echo '</td>';
}
?>
