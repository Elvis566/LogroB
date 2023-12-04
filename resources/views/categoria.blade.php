<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('guardarCategoria')}}" method="POST">
        @csrf
        <label for="">Categoria</label>
        <input type="text" name="categoria">
        <button type="submit">Guardar</button>
    </form>
    <a href="{{url('producto')}}">Categorias</a>
</body>
</html>