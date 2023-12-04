<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
            <th>id</th>
            <th>Total en dolares</th>
            <th>Producto</th>
            <th>Fecha</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($vts as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->precioTotal}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->fecha}}</td></tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>