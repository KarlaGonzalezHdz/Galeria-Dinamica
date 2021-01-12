<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="foto" name="foto">
        <label for="titulo">Titulo de la foto</label>
        <input type="text" id="titulo" name="titulo">
        <label for="texto">Descripcion:</label>
        <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
        <input type="submit" class="submit" value="subir foto">
        </form>
    </div>

    <footer>
    <p class="copyright">Galeria creada por Karla GH</p>
    </footer>

</body>

</html>