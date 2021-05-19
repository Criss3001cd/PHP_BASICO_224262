<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Países</title>
</head>
<body>

    <h1 class="text-info">Lista de países</h1>
    <table  class="table table-bordered">
        <tr>
            <th class="text-primary">Nombre</th>
            <th class="text-danger">Capital</th>
            <th class="text-warning">Moneda</th>
            <th class="text-info">Población</th>
        </tr>
        @foreach ( $naciones as $nombre =>$nacion )
            <tr>
                <th class="text-primary">{{ $nombre}} </th>
                <td class="text-danger">{{ $nacion["capital"]}}</td>
                <td class="text-warning">{{ $nacion["moneda"]}}</td>
                <td class="text-info">{{ $nacion["poblacion"]}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
