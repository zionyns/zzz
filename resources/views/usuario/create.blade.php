@extends('index')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Usuario</div>
				<div class="panel-body">



					{!! Form::open(array('id' =>'formusuario', 'class'=>'form-horizontal')) !!}


					<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong> usuario agregado correctamente</strong>
					</div>


					
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		


					<div class="form-group">
						{!! Form::label('username','Username :',array('class' => 'col-sm-4 control-label'))!!}
							<div class="col-sm-5">
								{!! Form::text('CodSucursal:','sucursal',array('id'=>'Username','class'=>'form-control','required','disabled'))!!}
							</div>
					</div>
					
					

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1"> First Name :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="First_name" name="Nombre" placeholder="Nombre" />
								</div>
					</div>


						
					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Last Name :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Last_name" name="Direccion" placeholder="Direccion" />
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Email :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Email" name="Direccion" placeholder="Direccion" />
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Sucursal :</label>

								<div class="col-sm-5">
								<select class="form-control" name="" id="Sucursal">
										

										<option value="suc01">Sucursal 1</option>
										<option value="suc2">Sucursal 2</option>
										<option value="suc3">Sucursal 3</option>

										
								</select>
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Rol :</label>

								<div class="col-sm-5">
								<select class="form-control" name="" id="Rol">
										

										<option value="admin">Administrador</option>
										<option value="vendedor">Vendedor</option>

								</select>
								</div>

								
					</div>


					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Password :</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="Password" name="Direccion" placeholder="Direccion" />
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Confirmar Password :</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="Confirm_password" name="Direccion" placeholder="Direccion" />
								</div>
					</div>






					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
				
						{!!link_to('#',$title='Registrar nuevo usuario',$attributes = ['id'=>'registro-usuario','class'=>'btn btn-primary'], $secure = null)!!}

					</div>

	

	@section('scripts')
	
	<script src="{{asset('js/script-usuario.js')}}"></script>		

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop