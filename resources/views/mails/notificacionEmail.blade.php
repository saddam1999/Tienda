<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Holly Store</title>
</head>
<body>
    <p>Hola!  {{ $equipo->id_cliente }}.</p>
    <p>Recibimos tu {{ $equipo->modelo }}:</p>
    <ul>
        <li>IMEI / Serial: {{ $equipo->serial }}</li>
        <li>Observacion: {{ $equipo->id_comentario}}</li>
        <li>Status: {{ $equipo->status }}</li>
    </ul>
    <!--
    <p>Y esta es la posición reportada:</p>
    <ul>
        <li>Latitud:</li>
        <li>Longitud: </li>
        <li>
            <a href="https://www.google.com/maps/dir/">
                Ver en Google Maps
            </a>
        </li>
    </ul>-->
</body>
</html>
