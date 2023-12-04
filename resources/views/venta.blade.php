<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('comprarP', $producto->id)}} " method="post">
        @csrf
        @method('put')
        <label for="">Producto</label>
        <input type="text" name="nombre" value="{{$producto->nombre}}"><br>
        <label for="">Precio por Unidad</label>
        <input type="number" name="precio" value="{{$producto->precio}}"><br>
        <label for="">Fecha De venta</label>
        <input type="date" name="fechac" ><br>
        <label for="">Cantidad</label><br>
        <input type="number" name="cantidadCompra"> <br><br>
        <button type="submit">Camprar</button>

    </form>
</body>
</html>