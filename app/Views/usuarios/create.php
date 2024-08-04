<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="post" action="/usuarios/store">
        <label for="Nombres">Nombres:</label>
        <input type="text" name="Nombres" required><br>

        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" required><br>

        <label for="Email">Email:</label>
        <input type="email" name="Email" required><br>

        <label for="Pass">Contraseña:</label>
        <input type="password" name="Pass" required><br>

        <label for="ID_Rol">Rol:</label>
        <input type="number" name="ID_Rol" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
