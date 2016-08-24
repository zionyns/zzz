@extends('index')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="panel panel-default">
				<div class="panel-heading">Perfil</div>
				<div class="panel-body">
	
						@foreach ($usuario as $u)
                    	
                    	{{$u->first_name}}
                    	{{$u->last_name}}
                    	{{$u->username}}
                    	{{$u->sucursal}}

                		@endforeach 

                		

				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	            		
@stop

