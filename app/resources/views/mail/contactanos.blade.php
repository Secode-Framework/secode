<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
<h1>Contáctanos</h1>
<p>Alguien se quiere contactar contigo</p>
<p>Información:</p>
<p>Nombre: {{$contactanosDTO->getNombre()}}</p>
<p>Telefono: {{$contactanosDTO->getTelefono()}}</p>
<p>Email: {{$contactanosDTO->getEmail()}}</p>
<p>Texto adicional: {{$contactanosDTO->getComentarioAdicional()}}</p>

</body>
</html>
