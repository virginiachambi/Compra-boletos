<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Gracias por tu Compra!</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>¡Gracias por tu Compra!</h1>
        <?php
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $evento = $_POST['evento'];
            $cantidad = $_POST['cantidad'];

            echo "<p>¡Gracias, $nombre! Tu compra de $cantidad boletos para $evento ha sido confirmada.</p>";
            echo "<p>Se ha enviado un correo de confirmación a $correo.</p>";
        ?>
        <a href="index.php" class="btn">Volver a la Página Principal</a>
    </div>
</body>
</html>
