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
        {!! Form::text('CodProducto',null,['id'=>'CodProducto','class'=>'form-control','required',''])!!}
    </div>
    <div class="form-group">
        {!! Form::label('nombre :')!!}
       {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','required','onKeyUp'=>"this.value=this.value.toUpperCase();"])!!}
		
    </div>
    <div class="form-group">
        {!! Form::label('tipo:')!!}
        {!! Form::text('tipo',null,['id'=>'tipo','class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('peso:')!!}
        {!! Form::input('number','number',null,['id'=>'peso','class'=>'form-control' , 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('stock:')!!}
        {!! Form::input('number','number',null,['id'=>'stock','class'=>'form-control' , 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('precio:')!!}
        {!! Form::input('number','number',null,['id'=>'stock','class'=>'form-control' , 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('sucursal:')!!}
        {!! Form::text('sucursal',null,['id'=>'sucursal','class'=>'form-control','required',''])!!}
    </div>





		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				
			{!!link_to('#',$title='Registrarrr',$attributes = ['id'=>'registro-producto','class'=>'btn btn-primary'], $secure = null)!!}

			</div>

	

	@section('scripts')
	
		<script src="{{asset('js/script-producto.js')}}"></script>

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop