<?php

require_once '../assets/functions/db_functions.php';
include_once '../assets/functions/consultarPokemon.php';
require_once("../assets/functions/auth.php");
$pokemons = obtenerPokemons();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="body-busqueda">

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
                    <input type="text" class="form-control" name="buscar"
                        placeholder="Ingrese nombre, tipo o número de Pokémon">
                    <button type="submit" class="btn btn-primary" name="boton">¿Quién es este Pokémon?</button>
                </form>
            </div>

            <?php
            foreach ($pokemons as $pokemon) {
                echo '<div class="col-sm-3 col-lg-3 mb-3">
                <a href="editar-pokemon.php?identificador='.$pokemon->identificador.'">editar</a>
                <div class="card">
                <span class="pokemon-id">' . $pokemon->identificador . '</span>
                <div class="d-flex justify-content-center">
                <img src="../uploads/' . $pokemon->img . '" class="card-img-top pokemon-img" alt="' . $pokemon->nombre . '">
                </div>
                <div class="card-body">
                  <h5 class="card-title">' . $pokemon->nombre . '</h5>
                  <div class="row" >
                  <div class="col-3"> 
                  <img class="w-100" src="../assets/img/vida.png">
                  
                  </div>
                  <div class="col-3"> 
                  <div class="pokemon-tipo-container">
                    <img class="w-100" src="../assets/img/tipo/' . $pokemon->tipo . '.png">
                    </div>
                  </div>
                  <div class="col-3">
                  <img class="w-100" src="../assets/img/ataque.png">
                  
                  </div>
                  <div class="col-3"> 
                  <img class="w-100" src="../assets/img/velocidad.png">
                  </div>
                  
                  </div>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                </div>';
            }

            ?>
        </div>
    </div>

    <!--------------------- TABLA -------------------------------->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>

</body>

</html>