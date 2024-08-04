<!DOCTYPE html>
<html>
<head>
    <title>Crear Solicitud</title>
</head>
<body>
    <h1>Crear Solicitud</h1>
    <form method="post" action="/solicitudes/store">
        <label for="id_Usuario">ID Usuario:</label>
        <input type="number" name="id_Usuario" required><br>

        <label for="id_permiso">ID Permiso:</label>
        <input type="number" name="id_permiso" required><br>

        <label for="fecha_inicio">Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" required><br>

        <label for="fecha_termino">Fecha Término:</label>
        <input type="date" name="fecha_termino" required><br>

        <label for="hora_inicio">Hora Inicio:</label>
        <input type="time" name="hora_inicio" required><br>

        <label for="hora_termino">Hora Término:</label>
        <input type="time" name="hora_termino" required><br>

        <label for="id_estado">ID Estado:</label>
        <input type="number" name="id_estado" required><br>

        <label for="motivo">Motivo:</label>
        <textarea name="motivo" required></textarea><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
