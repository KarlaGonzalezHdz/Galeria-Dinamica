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
            <h1 class="titulo">Foto: <?php 
                if(!empty($foto['titulo'])){
                echo $foto['titulo'] ;
            }else {
                echo $foto['imagen'];
            }
            ?></h1>
        </div>
    </header>
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen'];?>" alt="">
            <p class="texto"><?php echo $foto['texto'];?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"> Regresar</i></a>
        </div>
    </div>

    <footer>
    <p class="copyright">Galeria creada por Karla GH</p>
    </footer>

</body>

</html>