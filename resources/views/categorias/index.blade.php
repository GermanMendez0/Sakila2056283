<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Categorias</title>
 </head>
<style>
   *{
        padding: 0;
        margin: 0;
   }
   body{
       background-color: rgb(224, 240, 255);
   }
   .contenedor-card{
        width: 50%;
        overflow: hidden;
   }
   
</style>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Categorias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/categorias">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categorias/add">new</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="contenedor-card">
        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
            <div class="card-header">
                <h3>Categorias</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">Listado</h5>
              <ul class="list-group list-group-flush text-black">

                @foreach ($categorias as $catI)

                    <div class="btn-group btn-group-lg">
                        <li class="list-group-item" style="min-width: 10rem; color:black;">{{$catI['name']}}</li>
                    <a href="{{ url('categorias/edit/'.$catI['category_id'] ) }}" class="btn btn-primary" style="border-radius: 0px;">Actualizar</a>
                    </div>

                @endforeach

              </ul>
              <br>
            {{$categorias->links()}}
            </div>
        </div>
    <div>
 </body>
</html>