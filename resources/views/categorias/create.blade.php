<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 40px;
            color: #333;
        }
        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"] {
            padding: 10px 12px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        @keyframes rainbow {
        0%   { background-color: #ff0000; }   /* rojo */
        14%  { background-color: #ff7f00; }   /* naranja */
        28%  { background-color: #ffff00; }   /* amarillo */
        42%  { background-color: #00ff00; }   /* verde */
        56%  { background-color: #0000ff; }   /* azul */
        70%  { background-color: #4b0082; }   /* índigo */
        84%  { background-color: #8f00ff; }   /* violeta */
        100% { background-color: #ff0000; }   /* rojo */
        }

        button {
        padding: 12px;
        border: none;
        color: white;
        font-weight: bold;
        font-size: 1em;
        border-radius: 5px;
        cursor: pointer;
        animation: rainbow 5s linear infinite;
        transition: background-color 0.3s ease;
        }

    </style>

    <body>
        <pre>
            <form action="{{ route('categoria.store') }}" method="post">
 
                @csrf
 
                <label for="">nombre</label>
                <input type="text" name="nombre" autocomplete="off" required>
                               
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" autocomplete="off">
                               
                <button type="submit">Guardar</button>
            </form>
        </pre>
    </body>
</html>