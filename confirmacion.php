<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Compra</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Confirmación de Compra</h1>
        <?php
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $evento = $_POST['evento'];
            $cantidad = $_POST['cantidad'];

            echo "<p>Nombre: $nombre</p>";
            echo "<p>Correo Electrónico: $correo</p>";
            echo "<p>Evento Seleccionado: $evento</p>";
            echo "<p>Cantidad de Boletos: $cantidad</p>";
        ?>
        <form action="thanks.php" method="POST">
            <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="evento" value="<?php echo $evento; ?>">
            <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Confirmar Compra">
        </form>
    </div>
</body>
</html>
