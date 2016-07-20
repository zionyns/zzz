
<!doctype html>
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>INICIO DE SESION</title>

    <link href="css/app.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    
</head>
<body >




<div class="container-fluid"  >
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >LOGIN</div>
                <div class="panel-body">



            @if(Session::has('error_message'))
                @if((Session::get('error_message')) == 'M1')
                    <div class="alert alert-danger">   
                        <p>datos invalidos</p>
                    </div>
                 @endif


                @if((Session::get('error_message')) == 'M2')
                    <div class="alert alert-success">   
                        <p>cerro sesion exitosamente</p>
                    </div>
                 @endif

            @endif




        {!! Form::open(array('class'=>'form-horizontal' , 'role'=>'form','url'=>'login')) !!}


        <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

            <div class="form-group">
            {!! Form::label('username', 'username',array('class'=>'col-md-4 control-label')) !!}
                <div class="col-md-6">
                {!! Form::text('username',null,array('class'=>'form-control')) !!}
                </div>
            </div>
            


            <div class="form-group">
            {!! Form::label('password', 'Password',['class'=>'col-md-4 control-label']) !!}
                <div class="col-md-6">       
                {!! Form::password('password',array('class'=>'form-control')) !!}
                </div>
            </div>
 


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">

                    <label>
                    {!! Form::checkbox('remember', true) !!} Remember me
                    </label>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Log in', ['class' => 'btn btn-primary ']) !!}
                </div>
            </div>
    
        {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
    </div>

    {!! HTML::script('/cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}

    {!! HTML::script('/cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js') !!}


</body>
</html>