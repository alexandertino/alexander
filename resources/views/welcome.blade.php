<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <h1>Hola amigos</h1>
    <br>
    <h3>
        <a href="{{ route ('cliente.index') }}"> Clientes </a>
    </h3>
    <h4>
        <a href="{{ route('producto.index') }}"> Productos </a>
    </h4>
    <br>
    <h3>
        <a href="{{ route('categoria.index') }}"> Categorias </a>
    </h3>
</body>
</html>