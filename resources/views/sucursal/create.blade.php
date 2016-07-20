@extends('home')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">nueva sucursal</div>
				<div class="panel-body">



{!! Form::open() !!}


	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong> sucursal agregada correctamente</strong>
	</div>


	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		
		<div class="form-group">
				{!! Form::label('codigo:')!!}
				{!! Form::text('CodSucursal',$codigo,['id'=>'CodSucursal','class'=>'form-control','required','disabled'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('nombre sucursal:')!!}
				{!! Form::text('NombreSucursal',null,['id'=>'NombreSucursal','class'=>'form-control' , 'required'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('direccion:')!!}
				{!! Form::text('Direccion',null,['id'=>'Direccion','class'=>'form-control','required'])!!}
		</div>





		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				
			{!!link_to('#',$title='Registrarrr',$attributes = ['id'=>'registro-sucursal','class'=>'btn btn-primary'], $secure = null)!!}

			</div>

	

	@section('scripts')
	
		<script src="{{asset('js/script-sucursal.js')}}"></script>

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop