<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{$setting->setting_nombre}}</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card text-left">
                <img class="card-img-top ml-auto mr-auto " style="width:100px; height:100px;"
                    src="{{ $setting->setting_logo}}" alt="">
                <div class="card-body">
                    <h4 class="card-title text-success">Hola! {{ $equipo->id_cliente }}.</h4>
                    <p class="card-text">Recibimos tu {{ $equipo->modelo }}</p>
                    <ul>
                        <li>IMEI / Serial: {{ $equipo->serial }}</li>
                        <li>Observacion: {{ $equipo->id_comentario}}</li>
                        <li>Ticket: <a
                                href="{{$setting->setting_url}}/imprimir/id={{$equipo->id}}&csrf=lcHDliCnQA1Xoidbfz7zkeGHtItt4WHW4J4aJiJA">Ticket</a>
                        </li>
                        <li>Revisar Status de tu {{ $equipo->modelo }} entra a : <a
                                href="{{$setting->setting_url}}/orden/id={{$equipo->id}}&csrf=lcHDliCnQA1Xoidbfz7zkeGHtItt4WHW4J4aJiJA">Revisar</a>
                        </li>

                    </ul>
                    <ul class="card-footer">
                        <li>Horario: {{$setting->setting_abierto}}</li>
                        <li>Direccion: {{$setting->setting_direccion}}</li>
                        <li>Contacto: {{$setting->setting_contacto}}</li>
                        <li>Website: <a href="{{$setting->setting_url}}">{{$setting->setting_nombre}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
