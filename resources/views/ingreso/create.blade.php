@extends('index')
@section('content')
 
  
  
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title">NUEVO INGRESO DE PRODUCTOS</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        
                    </div>


                </div>

                
                <div class="box-body">

<div class="row">


<div >
    <form action="/" method="post">

  
           
            
        <div class="col-md-1">
            <label for="tipo">id:</label>
             <input type="text" name="idproducto" id="idproducto" class="form-control" >   

        </div>
        <div class="col-md-2">
            <label for="tipo">Producto:</label>
             <input type="text" name="codigo" id="codigo" class="form-control" >   

        </div>

        <div class="col-md-3">
            <label for="tipo">Descripcion:</label>
             <input type="text" name="descripcion" id="descripcion" class="form-control" >   

        </div>


        <div class="col-md-1">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" />


        </div>
        
        <div class="col-md-2">
            <label for="cantidad">Peso:</label>
            <input type="number" name="peso" id="peso" class="form-control" />


        </div>

        <div class="col-md-2">
            <label for="total">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" />


        </div>

        <div class="col-md-2">
        <label for="total">.</label>
            <button type="button" id="agregar" class="btn btn-primary" onclick="agregar_fila();">Agregar</button>
        </div>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="container-fluid">
    
    <div class="row">
        <div class="col-md-15 col-md-offset-15">
            <div class="box box-success">


                
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        
                    </div>


                </div>

                
                <div class="box-body">
    <table id="tabla" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Peso</th>
                <th>Precio</th>
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



<script>


function agregar_fila() {



var tablaElementos = document.getElementById('tabla-elementos');
     
    var txtid       = document.getElementById('idproducto');
    var txtproducto = document.getElementById('codigo');
    var txtcantidad = document.getElementById('cantidad');
    var txtpeso     = document.getElementById('peso');
    var txtprecio   = document.getElementById('precio');
    var btnAgregar  = document.getElementById('agregar');
    //recuperamos datos y validamos////////////////////////////
    var idproducto  = txtid.value ||'';
    var codproducto = txtproducto.value || '';
    var cantidad    = txtcantidad.value || '';
    var peso        = txtpeso.value || '';
    var precio      = txtprecio.value || '';



    txtcantidad.value = '';
    txtprecio.value = '';
    txtpeso.value = '';

    txtproducto.focus();

    // formato JSON de un item detalle // 
    var item = {
        idproducto:idproducto.trim(),
        codproducto:codproducto.trim(),
        cantidad: cantidad.trim(),
        peso: peso.trim(),
        precio: precio.trim()
    };

        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');

        var tdoperaciones = document.createElement('td');

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);
        tr.appendChild(td5);
        tr.appendChild(tdoperaciones);

        td1.textContent = item.idproducto;
        td2.textContent = item.codproducto;
        td3.textContent = item.cantidad;
        td4.textContent = item.peso;
        td5.textContent = item.precio;        

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
</script>

</body>
@stop