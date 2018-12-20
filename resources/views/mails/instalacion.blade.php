<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Notificación de Instalación</title>
</head>
<body>
    <p>Hola! Se Saluda e Informa que la Instalación de su Equipo ha sido Realizada.</p>
    <p>A partir de Hoy {{date("d-m-y")}}, Usted Puede Acceder y Ver la Gestión de su Equipo Minador</p>    

    <ul>
        <li>Su Instalador tiene el  Nombre de Usuario: {{ Auth::user()->username }}</li>
    </ul>

    <small>Nota: Si usted no posee un equipo en YBT San Vicente Ignore Este Mensaje</small>
</body>
</html>