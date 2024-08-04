<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <a href="/usuarios/create">Agregar Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        <?php foreach ($usuario as $user): ?>
            <tr>
                <td><?= $user['ID'] ?></td>
                <td><?= $user['Nombres'] ?></td>
                <td><?= $user['Apellidos'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['ID_Rol'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
