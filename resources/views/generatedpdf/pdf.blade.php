<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    .rectangulo {
        width: 80mm;
        height: 100mm;
        border: 3px solid #555;
        background: #428bca;
    }
    .page-break {
        page-break-after: always;
    }
</style>
<body>
<div class="rectangulo text-center">
    <h1>Delicia Coatepec</h1>
    <h2>Fecha</h2>

    <h4>Orden:</h4>
@foreach($firsttry as $result)
    {{ $result->name }}..... {{ $result->quantity }} <br>
@endforeach
</div>
</body>
</html>
