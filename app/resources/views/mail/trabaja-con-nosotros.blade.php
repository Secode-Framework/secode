<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
<h1>Trabaja con nosotros</h1>
<p>Alguien se quiere contactar contigo</p>
<p>Información:</p>
<p>Nombre: {{$trabajaConNosotrosDTO->getNombre()}}</p>
<p>Telefono: {{$trabajaConNosotrosDTO->getTelefono()}}</p>
<p>Email: {{$trabajaConNosotrosDTO->getEmail()}}</p>
<p>Texto adicional: {{$trabajaConNosotrosDTO->getComentarioAdicional()}}</p>

</body>
</html>
