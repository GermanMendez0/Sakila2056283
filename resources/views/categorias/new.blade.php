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
        width: 100%;
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
        <div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
            <div class="card-header">
                <h3>Categorias Crear</h3>
            </div>
            <div class="card-body">

                                    
                @if(session("exito"))

                <div class="alert-success"> {{session("exito")}} </div>

                @endif

            <form class="form-horizontal" method="post" action="{{url('categorias/store')}}">
                @csrf
                    <fieldset>

                    <!-- Form Name -->
                    <legend>NUEVA CATEGORIA</legend>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Nombre de categoria</label>  
                      <div class="col-md-4">
                      <input name="nombre" type="text" value="{{old('nombre')}}" placeholder="ingrese aqui su categoria" class="form-control input-md">
                      <strong class="text-danger"> {{  $errors->first('nombre')  }}  </strong>

                      </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="form-group">
                      <div class="col-md-4">
                        <button name="" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                    </fieldset>
                </form>                    

            </ul>
            </div>
        </div>
    <div>
 </body>
</html>