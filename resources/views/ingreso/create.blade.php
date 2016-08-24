@extends('index')
@section('content')
 
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Ingreso de Productos</div>
                <div class="panel-body">

        {!! Form::open() !!}


        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    
        
        <div class="col-md-4">
                {!! Form::label('codigo:')!!}
                {!! Form::text('CodIngreso',$codigo,['id'=>'CodIngreso','class'=>'form-control','required','disabled'])!!}
        </div>
    

                
        
        <div class="col-md-4">
                
            <label for="tipo">sucursal:</label>
            <select id="select-sucursales" class="form-control">
                @foreach ($sucursales as $s) {
                <option value="{{$s->CodSucursal}}">{{ $s->NombreSucursal }}</option>
                @endforeach  
            </select>

        </div>
     

    
       <div class="col-md-4">
                {!! Form::label('usuario:')!!} 
                {!! Form::text('usuario', Auth::user()->first_name ,['id'=>'usuario','class'=>'form-control','required','disabled'])!!}
        </div>
        </div>
        </div>
        </div>
        </div>



<div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Detalles de Ingreso</div>
                <div class="panel-body">
        


<div >
    <form action="/" method="post">

        <div class="col-md-2">
            <label for="tipo">producto:</label>
            <select id="tipo" class="form-control">
                @foreach ($productos as $p) {
                <option value="{{$p->CodProducto}}">{{ $p->nombre }}</option>
                @endforeach  
            </select>
        </div>


        <div class="col-md-2">
            <label for="unitario">precio unitario:</label>
            <input type="number" name="titulo" id="unitario" class="form-control" required />


        </div>

        <div class="col-md-2">
            <label for="cantidad">cantidad:</label>
            <input type="number" name="titulo" id="cantidad" class="form-control" />


        </div>
        
        <div class="col-md-2">
            <label for="cantidad">peso:</label>
            <input type="number" name="titulo" id="peso" class="form-control" />


        </div>

        <div class="col-md-2">
            <label for="total">total:</label>
            <input type="number" name="titulo" id="total" class="form-control" />


        </div>

        <div class="col-md-2">
            <button type="button" id="agregar" class="btn btn-danger" onclick="agregar_fila();">Agregar</button>
        </div>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="panel panel-default">
                <div class="panel-heading">DETALLES</div>
                <div class="panel-body">

    <table id="tabla" class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody id="tabla-elementos">
            
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>


     <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                {!! Form::button('Realizar Ingreso ',['id'=>'btnRecorrer','class'=>'btn btn-primary'])!!}

            </div>
    </div>




    @section('scripts')
    
        <script src="{{asset('js/script-ingreso.js')}}"></script>

    @stop   


{!! Form::close()!!}

</div>

</div>
</div>
</div>
</div>
</div>
</div>

<script>
////////////////////////////////////////////////





function agregar_fila() {

    var tablaElementos = document.getElementById('tabla-elementos');


    var ddlTipo = document.getElementById('tipo');
    var txtUnitario = document.getElementById('unitario');
    var txtCantidad = document.getElementById('cantidad');
    var txtTotal = document.getElementById('total');

    var btnAgregar = document.getElementById('agregar');

    //recuperamos datos y validamos////////////////////////////
    
    var tipo = ddlTipo.value || '';
    var unitario = txtUnitario.value || '';
    var cantidad = txtCantidad.value || '';
    var total = txtTotal.value || '';
    

  
    
    if (!cantidad || !cantidad.trim().length) {
        alert('debe ingresar una yy');
        return;
    }

    if (!total || !total.trim().length) {
        alert('debe ingresar una zz');
        return;
    }


    txtUnitario.value = '';
    txtCantidad.value = '';
    txtTotal.value = '';

    txtUnitario.focus();

    ///////////////////////////////////////////////////////////////7

    // formato JSON de un item detalle // 

    var item = {
        unitario: unitario.trim(),
        cantidad: cantidad.trim(),
        total: total.trim(),
        tipo: tipo
         
    };

    

    
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var tdoperaciones = document.createElement('td');

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);
        tr.appendChild(tdoperaciones);

        td1.textContent = item.tipo;
        td2.textContent = item.unitario;
        td3.textContent = item.cantidad;
        td4.textContent = item.total;        

        tablaElementos.appendChild(tr);


        //crear boton eliminar
        var element2 = document.createElement("input");
               
        element2.type = "button" ;
        element2.value  ="X";
        element2.className="btn btn-primary";
        tdoperaciones.appendChild(element2);

        element2.onclick=function(){

            var td = this.parentNode;
            var tr = td.parentNode;
            var table = tr.parentNode;
                table.removeChild(tr);
        }



        

};

          //////////////////////////////////////////////







          
</script>







@stop