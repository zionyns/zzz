@extends('home')

@section('content')

@include('producto.modal')

@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('mensaje') }}
</div>
@endif






<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">lista de productos</div>
				<div class="panel-body">
					

<table class="table">
	<thead>

		<th>CODIGO</th>
		<th>NOMBRE</th>
		<th>TIPO</th>
		<th>PESO</th>
		<th>STOCK</th>
		<th>PRECIO</th>
		<th>SUCURSAL</th>
		<th>OPERACIONES</th>

	</thead>
	

	<tbody id="datos-producto">
			




	@section('scripts')
	
		<script src="{{asset('js/script-producto.js')}}"></script>

	@stop	


		</tbody>

</table>
	
</div>
</div>
</div>
</div>
</div>
@stop