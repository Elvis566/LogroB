<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('guardarProducto')}}" method="POST">
        @csrf
        <label for="">Producto</label>
        <input type="text" name="nombre">
        <label for="">Cantidad</label>
        <input type="number" name="cantidad">
        <label for="">Precio</label>
        <input type="number" name="precio">
        <label for="">Fecha De vencimiento</label>
        <input type="date" name="fecha">
        <label for="">Categoria</label>
        <select name="categoria">
            @foreach($cat as $item)
                <option value={{$item->id}}>{{$item->categoria}}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>

    
</body>
</html>