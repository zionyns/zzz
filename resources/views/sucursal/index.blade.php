@extends('home')

@section('content')

@include('sucursal.modal')


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
				<div class="panel-heading">lista de sucursales</div>
				<div class="panel-body">
					

<table class="table table-hover">
	<thead>
		<th>CODIGO</th>
		<th>NOMBRE</th>
		<th>DIRECCION</th>
		<th>OPERACION</th>

	</thead>

		
		<tbody id="datos-sucursal">
			




	@section('scripts')
	
		<script src="{{asset('js/script-sucursal.js')}}"></script>

	@stop	


		</tbody>

</table>

</div>
</div>
</div>
</div>
</div>
@stop