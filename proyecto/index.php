<?php

require_once 'Database.php';
require_once 'FormHandler.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Comida Servida</title>
    <!-- Incluye Bootstrap para estilos CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro de Comida Servida</h2>
        <!-- Formulario HTML para ingresar datos -->
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="nombre_persona" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" id="nombre_persona" name="nombre_persona" required>
            </div>
            <div class="mb-3">
                <label for="menu" class="form-label">Menú</label>
                <input type="text" class="form-control" id="menu" name="menu" required>
            </div>
            <div class="mb-3">
                <label for="fecha_hora" class="form-label">Fecha y Hora (YYYY-MM-DD HH:MM:SS)</label>
                <input type="text" class="form-control" id="fecha_hora" name="fecha_hora" required>
            </div>
            <div class="mb-3">
                <label for="tiempo_comida" class="form-label">Tiempo de Comida</label>
                <!-- Selector de tiempo de comida -->
                <select class="form-control" id="tiempo_comida" name="tiempo_comida" required>
                    <option value="Desayuno">Desayuno</option>
                    <option value="Almuerzo">Almuerzo</option>
                    <option value="Cena">Cena</option>
                    <option value="Refacción">Refacción</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nombre_servidor" class="form-label">Nombre del Servidor</label>
                <input type="text" class="form-control" id="nombre_servidor" name="nombre_servidor" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <!-- Llama al método handleRequest() del objeto FormHandler para manejar la solicitud del formulario -->
        <?php $formHandler->handleRequest(); ?>
    </div>
</body>
</html>
