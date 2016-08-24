@extends('index')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">nueva sucursal</div>
				<div class="panel-body">



					{!! Form::open(array('id' =>'formsucursal', 'class'=>'form-horizontal')) !!}


					<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong> sucursal agregada correctamente</strong>
					</div>


					
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		


					<div class="form-group">
						{!! Form::label('codigo:','codigo:',array('class' => 'col-sm-4 control-label'))!!}
							<div class="col-sm-5">
								{!! Form::text('CodSucursal',$codigo,array('id'=>'CodSucursal','class'=>'form-control','required','disabled'))!!}
							</div>
					</div>
					
					

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Nombre</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" />
								</div>
					</div>


						
					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">direccion</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" />
								</div>
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