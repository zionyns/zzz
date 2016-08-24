@extends('index')

@section('content')

@include('usuario.modal')


@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('mensaje') }}
</div>
@endif




<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Usuarios</div>
				<div class="panel-body">
					

<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>ROL</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>SUCURSAL</th>
		<th>OPERACIONES</th>

	</thead>

		
		<tbody id="datos-usuarios">
			




	@section('scripts')
	
		<script src="{{asset('js/script-usuario.js')}}"></script>

	@stop	


		</tbody>

</table>

</div>
</div>
</div>
</div>
</div>
@stop