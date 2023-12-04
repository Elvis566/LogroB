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
                <td>id</td>
                <td>Producto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Fecha DE vencimiento</td>
                <td>Categoria</td>
                <td>acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->fechaVencimiento}}</td>
                <td>{{$item->categoria}}</td>
                <td>
                    <form action="{{url('Compra', $item->id)}} " method="get">
                        <button type="submit">Comprar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{url('filtrar')}}" method="GET">
        @csrf
        <select name="datoFiltrado" id="">
            @foreach($categoria as $item)
               <option value="{{$item->id}}">{{$item->categoria}}</option>
            @endforeach
        </select> 
        <button type="submit">Filtrar</button>      
    </form>
</body>
</html>