<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>
        
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            color: #333;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        thead {
            background-color: #007bff;
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #e9ecef;
        }

        @keyframes rainbow-text {
        0%   { color: #ff0000; }
        14%  { color: #ff7f00; }
        28%  { color: #ffff00; }
        42%  { color: #00ff00; }
        56%  { color: #0000ff; }
        70%  { color: #4b0082; }
        84%  { color: #8f00ff; }
        100% { color: #ff0000; }
        }
        /* Botones editar y eliminar */
        td a {
            padding: 6px 12px;
            border-radius: 4px;
            display: inline-block;
            font-size: 0.9em;
        }
        td a[href*="edit"] {
            font-weight: bold;
            animation: rainbow-text 4s linear infinite;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        td a[href*="edit"]:hover {
            background-color:rgb(87, 199, 124);
        }
        @keyframes glowing-red {
        0% {box-shadow: 0 0 5px #dc3545, 0 0 10px #dc3545, 0 0 20px #dc3545, 0 0 40px #dc3545;}
        50% {box-shadow: 0 0 10px #ff4c4c, 0 0 20px #ff4c4c, 0 0 30px #ff4c4c, 0 0 50px #ff4c4c;}
        100% {box-shadow: 0 0 5px #dc3545, 0 0 10px #dc3545, 0 0 20px #dc3545, 0 0 40px #dc3545;}
        }

        td a[href*="delete"] {
        background-color: #dc3545;
        color: #fff;
        animation: glowing-red 2s infinite ease-in-out;
        transition: background-color 0.3s ease;
        }

        td a[href*="delete"]:hover {
        background-color: #b02a37;
        animation: none;
        box-shadow: none; 
        }


    </style>

    <body>
        <h1>Productos</h1>
 
        <a href="{{ route('producto.create') }}">Agregar</a>
        <br>
        <br>
 
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>categoria_id</th>
                    <th>codigo</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Productos as $key => $producto)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>
                        <a href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('producto.delete', $producto->id) }}">eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
 
    </body>
</html>