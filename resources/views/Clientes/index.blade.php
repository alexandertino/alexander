<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
    </head>
    <body>
        <h1>Clientes</h1>
 
        <a href="{{ route('cliente.create') }}">Agregar</a>
        <br>
        <br>
 
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombres</th>
                    <th>pri_ape</th>
                    <th>seg_ape</th>
                    <th>tipo_doc</th>
                    <th>docu_tip</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $key => $cliente)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->pri_ape }}</td>
                    <td>{{ $cliente->seg_ape }}</td>
                    <td>{{ $cliente->docu_tip }}</td>
                    <td>{{ $cliente->docu_num }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>
                        <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('cliente.delete', $cliente->id) }}">eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
 
    </body>
</html>