<?php

$fecha =date("d/m/y");
$edad = 32;
$nombre = "natalia";
$apeliculas =array("shrek",
                    "El dia despues de mañana",
                    "titanic");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>FICHA personal</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-12 pt-3 ph-5 text-center">
            <h1>Ficha personal</h1>
        </div>
    </div>
    </div>
    <div class="col-12">
    <table class="table table-hover border">
    <tr>
        <th>Fecha:</th>
        <td><?php echo date("d/m/y");? </td>
    </tr>
    </div>
</body>