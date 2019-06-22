<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
        <title>Editar Producto</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		    <a class="navbar-brand" href="{{url('producto')}}"> <- Volver</a>
		</nav>

  </head>
  <body>

  	<br><br><br>
  	<div class="col-md-8 order-md-1">
  		<h1>
  			Producto!!
  		</h1>
  	</div>

  	<div class="container">
  		<div>
    	<form action="{{route('producto.update',$productos->id)}}" method="POST">
    	@csrf
    	@method('PUT')
    	    <div class="">
	        	<br><br>
	            <div class="col-md-6 mb-3">
	    	        <label>Nombre:</label>
	                <input type="text" class="form-control" name="nombre" value="{{$productos->nombre}}" required>
	            </div>
	            <div class="col-md-6 mb-3">
	                <label>Categor&iacute;a:</label>
	                <input type="text" class="form-control" name="categoria" value="{{$productos->categoria}}" required>
	            </div>
	            <div class="col-md-6 mb-3">
	                <label>Descripci&oacute;n</label>
	                <input type="text" class="form-control" name="descripcion" value="{{$productos->descripcion}}" required>
	            </div>
              <div class="col-md-6 mb-3">
                <label>Presentaci&oacute;n:</label>
                  <input type="text" class="form-control" name="presentacion" value="{{$productos->presentacion}}" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label>Cantidad:</label>
                  <input type="text" class="form-control" name="cantidad" value="{{$productos->cantidad}}" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label>Unidad de Medidad</label>
                  <input type="text" class="form-control" name="unidad" value="{{$productos->unidad}}" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label>Precio:</label>
                  <input type="text" class="form-control" name="precio" value="{{$productos->precio}}" required>
              </div>
	            <hr class="mb-4">
	            <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
	        </div>
	    </form>
	  	</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>

  </body>
</html>
