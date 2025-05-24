<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Texto quemado</title>
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
        text-transform: capitalize;
      }
      input[type="text"] {
        padding: 10px 12px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
        color: #000;
        /* Para que el texto sea visible y animable */
      }
      input[type="text"]:focus {
        border-color: #dc3545;
        outline: none;
      }
      button {
        padding: 12px;
        background-color: #dc3545;
        border: none;
        color: white;
        font-weight: bold;
        font-size: 1em;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      button:hover {
        background-color: #a71d2a;
      }

      /* Animación quemado */
      @keyframes burnAway {
        0% {
          color: #000;
          text-shadow: 0 0 0 #000;
          opacity: 1;
          transform: translateY(0);
        }
        30% {
          color: #ff5500;
          text-shadow:
            0 0 10px #ff5500,
            0 0 20px #ff3300,
            0 0 30px #ff0000;
        }
        70% {
          color: #660000;
          text-shadow:
            0 0 20px #aa3300,
            0 0 30px #660000,
            0 0 40px #440000;
          opacity: 0.5;
          transform: translateY(-25px);
        }
        100% {
          color: transparent;
          text-shadow: none;
          opacity: 0;
          transform: translateY(-50px);
        }
      }

      .burn-away {
        animation: burnAway 1.5s forwards;
      }
    </style>
  </head>
  <body>
    <form action="{{ route('producto.destroy') }}" method="post" id="myForm">
      @csrf
      <input type="hidden" name="id" value="{{ $Producto->id }}">
  
      <label for="">categoria</label>
      <input type="text" name="categoria" value="{{ $Producto->categoria->nombre   }}" autocomplete="off" required>

      <label for="">Codigo</label>
      <input type="text" name="Codigo" value="{{ $Producto->codigo }}" autocomplete="off" required>
        
      <label for="">Nombres</label>
      <input type="text" name="nombre" value="{{ $Producto->nombre }}" autocomplete="off" required>
                    
      <label for="">descripcion</label>
      <input type="text" name="descripcion" value="{{ $Producto->descripcion }}" autocomplete="off" required>

      <button type="submit">Guardar</button>
    </form>

    <script>
      const form = document.getElementById('myForm');

      form.addEventListener('submit', function(event) {
        event.preventDefault();

        const nombreInput = form.querySelector('input[name="nombre"]');
        const descripcionInput = form.querySelector('input[name="descripcion"]');

        // Función para animar el input creando un span animado encima
        function animateInput(input) {
          // Obtener posición y tamaño del input
          const rect = input.getBoundingClientRect();

          // Crear span
          const span = document.createElement('span');
          span.textContent = input.value;
          span.style.position = 'absolute';
          span.style.left = rect.left + window.scrollX + 'px';
          span.style.top = rect.top + window.scrollY + 'px';
          span.style.width = rect.width + 'px';
          span.style.height = rect.height + 'px';
          span.style.lineHeight = rect.height + 'px';
          span.style.fontSize = window.getComputedStyle(input).fontSize;
          span.style.fontFamily = window.getComputedStyle(input).fontFamily;
          span.style.color = '#000';
          span.style.pointerEvents = 'none';
          span.classList.add('burn-away');

          document.body.appendChild(span);

          // Ocultar input para que no interfiera
          input.style.visibility = 'hidden';

          return span;
        }

        const animSpanNombre = animateInput(nombreInput);
        const animSpanDescripcion = animateInput(descripcionInput);

        // Después de la animación (1.5s), enviar el formulario y eliminar spans
        setTimeout(() => {
          animSpanNombre.remove();
          animSpanDescripcion.remove();
          form.submit();
        }, 1500);
      });
    </script>

  </body>
</html>
