<?php
function obtenerPokemons($con) {
    $sql = "SELECT * FROM pokemon";
    $result = $con->query($sql);
    $pokemons = array();

    if (mysqli_num_rows($result) > 0) {
        while ($fila = mysqli_fetch_assoc($result)) {
            $pokemon = array();
            $pokemon['id'] = $fila["id"];
            $pokemon['nombre'] = $fila["nombre"];
            $pokemon['img'] = $fila["img"];
            $pokemon['tipo'] = $fila["tipo"];
            $pokemon['descripcion'] = $fila["descripcion"];
            $pokemon['vida'] = $fila["vida"];
            $pokemon['defensa'] = $fila["defensa"];
            $pokemon['peso'] = $fila["peso"];
            $pokemon['velocidad'] = $fila["velocidad"];
            $pokemon['ataque'] = $fila["ataque"];
            $pokemons[] = $pokemon;
        }
    }

    return $pokemons;
}
?>
