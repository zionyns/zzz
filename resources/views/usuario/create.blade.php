<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! HTML::style('/css/app.css') !!}
	{!! HTML::style('//fonts.googleapis.com/css?family=Roboto:400,300') !!}

	<!--

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">nuevo usuario</div>
				<div class="panel-body">
					
@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


{!! Form::open(['route'=>'usuario.store' , 'method'=>'post'])!!}
		<div class="form-group">
				{!! Form::label('Nombre:')!!}
				{!! Form::text('name:',null,['class'=>'form-control','required'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('correo:')!!}
				{!! Form::email('email:',null,['class'=>'form-control' , 'required'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('Password:')!!}
				{!! Form::Password('password',['class'=>'form-control','required'])!!}
		</div>

		<div class="form-group">
                {!! Form::label('Tipo de Moneda:')!!}
                <select id="moneda" class="form-control">
                    <option value="sol">Sol</option>
                    <option value="dolar">Dolar</option>
                    <option value="euro">Euro</option>
                </select>
    </div>

		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!! Form::close()!!}


 <!--
				<form class="form-horizontal" role="form" method="POST"  acti = "usuario.store">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>




						<div class="form-group">
							<label class="col-md-4 control-label">correo</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>



						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>



						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
-->
</body>
</html>