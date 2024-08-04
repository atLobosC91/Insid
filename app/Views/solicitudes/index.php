<!DOCTYPE html>
<html>
<head>
    <title>Lista de Solicitudes</title>
</head>
<body>
    <h1>Lista de Solicitudes</h1>
    <a href="/solicitudes/create">Agregar Solicitud</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Usuario</th>
            <th>ID Permiso</th>
            <th>Fecha Inicio</th>
            <th>Fecha Término</th>
            <th>Hora Inicio</th>
            <th>Hora Término</th>
            <th>ID Estado</th>
            <th>Motivo</th>
            <th>Fecha Solicitud</th>
        </tr>
        <?php foreach ($solicitud as $solicitud): ?>
            <tr>
                <td><?= $solicitud['ID'] ?></td>
                <td><?= $solicitud['id_Usuario'] ?></td>
                <td><?= $solicitud['id_permiso'] ?></td>
                <td><?= $solicitud['fecha_inicio'] ?></td>
                <td><?= $solicitud['fecha_termino'] ?></td>
                <td><?= $solicitud['hora_inicio'] ?></td>
                <td><?= $solicitud['hora_termino'] ?></td>
                <td><?= $solicitud['id_estado'] ?></td>
                <td><?= $solicitud['motivo'] ?></td>
                <td><?= $solicitud['fecha_solicitud'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
