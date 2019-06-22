<!DOCTYPE html>
<html>
<head>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Tienda - Abarrotes</title>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <a class="navbar-brand" href="{{url('producto')}}">Abarrotes</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	      <form class="form-inline mt-2 mt-md-0" action="{{ url('search')}}" method="get">
	        <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." name="search">
	        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
	      </form>
	    </div>
	  </nav>

</head>
<body>
	
	<br><br><br>

	<div class="container">
		<div>
		<a href="{{route('producto.create')}}" class="btn btn-primary">
			Agregar producto +
		</a>
	</div>

	@if(Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>Aviso!!</strong>  {!! Session('message') !!}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
    @endif()

	<br><br>

	<div class="center">  
		<table class="table" border="1">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Categor&iacute;a</th>
					<th scope="col">Descripci&oacute;n</th>
					<th scope="col" width="30%">Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($productos as $producto)
				<tr>
					<th scope="col">
						{{$producto -> nombre}}
					</th>
					<td>
						{{$producto -> categoria}}
					</td>
					<td>
						{{$producto -> descripcion}}
					</td>
					<td>
						<a href="{{route('producto.show',$producto)}}" class="btn btn-primary">Ver</a>
						<a href="{{route('producto.edit',$producto)}}" class="btn btn-success">Editar</a><br>
						<form action="{{route('producto.destroy',$producto)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Borrar</button>
						</form>
					</td> 
				</tr>
				@endforeach
				{{$productos->render()}}
			</tbody>
		</table>
	</div>
	</div>
	

</body>
</html>