<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>teoria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>listado de productos</h1>

        <?php
            global $conexion;
            include_once ("config.php");
            $productos = "select * from productos";
            $resultado = $conexion -> query($productos);
            //echo var_dump($resultado);
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">unidades</th>
                <th scope="col">precio</th>
                <th scope="col">caducidad</th>
                <th scope="col">descuento</th>
                <th scope="col">foto</th>
            </tr>
            </thead>
            <tbody>
            <?php

                while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {

                    echo '<tr >';
                        echo '<th scope = "row" >'.$fila["id"].'</th >';
                        echo '<td >'.$fila["nombre"].'</td >';
                        echo '<td >'.$fila["unidades"].'</td >';
                        echo '<td >'.$fila["precio"].'</td >';
                        echo '<td >'.$fila["caducidad"].'</td >';
                        echo '<td >'.$fila["descuento"].'</td >';
                        echo '<td ><img src="'.$fila["foto"].'" width="100" border="2px"></td >';
                    echo '</tr >';
                }
            ?>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>
