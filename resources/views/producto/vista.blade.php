<!DOCTYPE html>
<html>
<head>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
	<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title>Presentaci&oacute;n</title>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <a class="navbar-brand" href="{{url('producto')}}"> <- Volver </a>
	 </nav>

</head>
<body>

	<br><br><br>

	<div class="container">
		<div class="">
			<label>
				<h2>
					¡Presentaci&oacute;n de {{$productos -> nombre}}!
				</h2>
			</label>
		</div>

		<br><br>

		@if(Session::has('message'))
	    <div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Aviso!!</strong>  {!! Session('message') !!}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	    @endif()

		<br><br>

		<table class="table" border="1">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Presentaci&oacute;n</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Unidad de Medida</th>
					<th scope="col">Precio</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="col">
						{{$productos -> nombre}}
					</th>
					<td>
						{{$productos -> presentacion}}
					</td>
					<td>
						{{$productos -> cantidad}}
					</td>
					<td>
						{{$productos -> unidad}}
					</td>
					<td>
						{{$productos -> precio}} pesos
					</td> 
				</tr>
			</tbody>
		</table>
	</div>

</body>
</html>