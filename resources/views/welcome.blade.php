<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda telefónica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <style>
            html, body {
                font-family: 'Quicksand', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>
      <div class="position-ref full-height">
        <div class="content">

          </br>

          <h1 class="text-center">
            Agenda Telefónica
          </h1>

          </br>
          
          {{--Búsqueda--}}
          <div class="mx-auto" style="width: 400px;">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Contacto...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
              </span>
            </div>
          </div>
          </br>

          {{--Entrada de datos--}}
          <form class="mx-auto col-md-6">
            <div class="form-row">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="col-4">
                <input type="number" class="form-control" placeholder="Teléfono">
              </div>
              <div class="col-2">
                <button type="button" class="btn btn-success">Guardar</button>
              </div>
            </div>
          </form>

          </br>

          {{--Tabla--}}
          <div class="mx-auto col-md-6">
            
            <table class="table">
              <thead>
                <tr>
                  <th class="col-md-2">Nombre</th>
                  <th class="col-md-2">Telefono</th>
                  <th class="col-md-2"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Roberto Adrián Martínez García</td>
                  <td>6181163928</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

<!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
