<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('cliente.store') }}" method="post">
 
                @csrf

                <input type="hidden" name="id" value="{{ $cliente->id }}">
 
                <label for="">Nombres</label>
                <input type="text" name="nombre" value="{{ $cliente->nombres }}" autocomplete="off" required>
                               
                <label for="">Primer Apellido</label>
                <input type="text" name="pri_ape" value="{{ $cliente->pri_ape }}" autocomplete="off" required>
                               
                <label for="">Segundo Apellido</label>
                <input type="text" name="seg_ape" value="{{ $cliente->seg_ape }}" autocomplete="off" required>
                               
                <label for="">Tipo de Documento</label>
                <select name="docu_tip" required>
                    <option value="{{ $cliente->docu_tip }}">{{ $cliente->docu_tip }}</option>
                    <option value=""> Seleccionar </option>
                    <option value="DNI">DNI</option>
                    <option value="RUC">RUC</option>
                </select>
                               
                <label for="">Número de Documento</label>
                <input type="text" name="docu_num" value="{{ $cliente->docu_num }}" autocomplete="off" required>
               
                <label for="">Telefono</label>
                <input type="text" name="telefono" value="{{ $cliente->telefono }}" autocomplete="off">
                               
                <label for="">Dirección</label>
                <input type="text" name="direccion" value="{{ $cliente->direccion }}" autocomplete="off">
 
                <button type="submit">Guardar</button>
            </form>
        </pre>
    </body>
</html>