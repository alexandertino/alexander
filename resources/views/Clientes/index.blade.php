<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios</h1>
    <br>
    {{ $clientes }}
    <br>
    
    <table border="1">
        <thead>
            <tr>
                <th>nombres</th>
                <th>pri_ape</th>
                <th>seg_ape</th>
                <th>Tipo_doc</th>
                <th>nombres</th>

            </tr>
        </thead>
        <body>
            @foreach ($clientes as $cliente)
            <tr>
            
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->pri_ape }}</td>
            <td>{{ $cliente->seg_ape }}</td>
            <td>{{ $cliente->docu_tip }}</td>
            <td>{{ $cliente->docu_num }}</td>
            </tr>
            @endforeach
        </body>
    </table>
</body>
</html>