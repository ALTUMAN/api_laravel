<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
        <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <br><br>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
          Listar Articulos
        </div>
        <br>
        <p>
            <a href="{{route ('articulos')}}" class="btn btn-primary">Agregar producto</a>
        </p>
        <ul class="list-group list-group-flush">
        </ul>
    </div>
     <div>
        <table class="table table-dark" action = {{route ('articulos')}}>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($datos as $item)

          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>

        @endforeach
        </tbody>
      </table></div>
</body>
</html>
