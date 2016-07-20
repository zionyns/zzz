@extends('home')

@section('content')



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
				<div class="panel-heading">lista de sucursales</div>
				<div class="panel-body">
					



<table class="table">
	<thead>

		<th>CODIGO</th>
		
		<th>precio unitario</th>
		<th>cantidad</th>
		<th>STOCK</th>
		<th>total</th>
		<th>ingreso</th>
		<th>nombre</th>
		

	</thead>

	@foreach($detalleingresos as $detalle)
	<tbody>
		<td>{{ $detalle->producto }}</td>
		<td>{{ $detalle->PrecioUnitario }}</td>
		<td>{{ $detalle->cantidad }}</td>
		<td>{{ $detalle->total }}</td>
		<td>{{ $detalle->ingreso }}</td>
		<td>{{ $detalle->nombre }}</td>
		<td>

		</td>
	</tbody>
	@endforeach
</table>

</div>
</div>
</div>
</div>
</div>
@stop