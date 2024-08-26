<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Boletos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Compra de Boletos</h1>
        <form action="confirmacion.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="evento">Seleccione el Evento:</label>
            <select id="evento" name="evento" required>
                <option value="concierto">Concierto</option>
                <option value="">Teatro</option>
                <option value="cine">Cine</option>
            </select><br>

            <label for="cantidad">Cantidad de Boletos:</label>
            <input type="number" id="cantidad" name="cantidad" min="1" max="10" required><br>

            <input type="submit" value="Comprar">
        </form>
    </div>
</body>
</html>
