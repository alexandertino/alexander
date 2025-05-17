<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
    <br>
    {{ $productos }}
    <br>

    <h2>Agregar Producto</h2>
    <<form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del producto" required>
        <input type="text" name="descripcion" placeholder="Descripción">
        <input type="number" step="0.01" name="precio" placeholder="Precio" required>
        <input type="text" name="categoria" placeholder="Categoría">
        <button type="submit">Guardar</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>nombres</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>categoria</th>

            </tr>
        </thead>
        <body>
            @foreach ($productos as $producto)
            <tr>
            
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->categoria }}</td>
            </tr>
            @endforeach
        </body>
    </table>
</body>
</html>