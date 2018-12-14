<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Notificación de cambio de clave</title>
<!-- CSS -->

</head>
<body>
    <p>Hola! </p>
    <p>Estás recibiendo este correo porque hiciste una solicitud de recuperacion de contraseña para tu cuenta.</p>
    <br>
    <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
        <tr>
            <td align="center">
                    <!--<form class="form-horizontal"  method="POST" action="{{ url('changePassword/'.$token) }}">
                        <div class="container text-center col-xs-12">
                            <button type="button" class="btn btn-info text-uppercase">Recuperar Clave</button>
                        </div>
                    </form>-->
            </td>
        </tr>
    </table>
    <br>
    <p>Haz click en el enlace: <a href="{{url('changePassword/'.$token.'/'.$email)}}">{{asset('/').'changePassword/'.$token.'/'.$email}}</a></p>
    
    <small>Nota: Si usted no posee un equipo en YBT San Vicente Ignore Este Mensaje</small>
</body>
</html>
