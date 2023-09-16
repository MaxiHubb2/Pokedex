<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-pokemon">

    <div class="container pt-5 d-flex justify-content-center">
        <form class="form-container" action="">
            <h3>Crear Pokemon</h3>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" required class="form-control" id="nombre"
                    placeholder="Ingrese el nombre de su pokemon">
            </div>
            <div class="mb-3">
                <label class="form-label" for="descripcion">Descripcion</label>
                <textarea class="form-control" placeholder="Ingrese una descripcion de su pokemon" id="descripcion"
                    style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
                <label for="vida" class="form-label">Vida</label>
                <input type="number" required class="form-control" id="vida"
                    placeholder="Ingrese el nivel de vida de su pokemon">
            </div>
            <div class="mb-3">
                <label for="defensa" class="form-label">Defensa</label>
                <input type="number" required class="form-control" id="defensa"
                    placeholder="Ingrese el nivel de defensa de su pokemon">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso</label>
                <input type="number" required class="form-control" id="peso"
                    placeholder="Ingrese el peso de su pokemon">
            </div>
            <div class="mb-3">
                <label for="velocidad" class="form-label">Velocidad</label>
                <input type="number" required class="form-control" id="velocidad"
                    placeholder="Ingrese la velocidad de su pokemon">
            </div>
            <div class="mb-3">
                <label for="ataque" class="form-label">Ataque</label>
                <input type="number" required class="form-control" id="ataque"
                    placeholder="Ingrese el nivel de ataque de su pokemon">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto de Pokemon</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Crear</button>
            </div>
        </form>
    </div>
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