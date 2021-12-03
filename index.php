<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilo.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.1/dist/sweetalert2.all.min.js"></script>
  
</head>
<body>
    <div class="principal">
      <div class="wrap">
        <h1>Tareas</h1><br>
        <form class="formulario" id="form" action="" method="POST">

          <input type="text" name="tarea" id="tareaInput" placeholder="Agrega tu tarea">
          <textarea name="alumno" id="alumnoText" cols="30" rows="10" placeholder="Alumnos"></textarea>
          <button type="button" class="boton" id="btn-agregar" name="enviar">Agregar Tarea</button>

        </form>
      </div>
    </div>

    <div class="tareas">
      <div class="wrap">
        <table class="tabla">
            <thead id="tabla-tareas">
                <tr><th>Tarea</th><th>Alumnos</th><th>Completado</th><th>Entregar</th></tr>
                <tr>  <td></td>      <td></td>        <td></td>       <td></td>  </tr>
            </thead>
        </table>
        
      </div>
    </div>

    <script src="main.js"></script>

  </body>
  <script>
    $('#btn-agregar').click(function(){
      var tarea = document.getElementById("tareaInput").value;
      var alumno = document.getElementById("alumnoText").value;
      var ruta = "tarea="+tarea+"&alumno="+alumno;

      $.ajax({
        url: 'guardar.php',
        type: 'POST',
        data: $("#form").serialize(),
      })
      .done(function(){
        console.log("success");
      })
      .fail(function(){
        console.log("error");
      })
      .always(function(){
        console.log("completado");
      });
    });
  </script>

</html>