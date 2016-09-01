$(document).ready(function(){
      $( function() { 

        $( "#codigo" ).autocomplete({
            source: "http://localhost/zzz/public/producto/autocomplete",
            minlenght:1,
            autoFocus:true,
            select:function(e,ui){


                $('#idProducto').val(ui.item.id);

                $('#idproducto').val(ui.item.id);
                $('#nombre').val(ui.item.nombre);
                $('#precio').val(ui.item.precio);
                $('#stock').val(ui.item.stock);
                console.log(ui.item.stock);
            }
        });
    });
});




$("#mensaje" ).click(function() {
 
  swal({   title: "Error!",   
            text: "Here's my error message!",   
            type: "error",   
            confirmButtonText: "Cool" 
        });

});


$("#total" ).focus(function() {
 
  var unit = $("#precio").val();
  var cant = $("#cantidad").val();
  var total = unit*cant;
  $("#total").val(total);
});


// $(document).on('change','#codigo',function (){
//     var codigo = $("#codigo").val();
//     var route = "http://localhost/zzz/public/producto/"+codigo+"/edit";

//     $.get(route, function(res) {
//         $("#nombre").val(res.nombre);
//         $("#tipo").val(res.tipo);
//         $("#peso").val(res.peso);
//         $("#precio").val(res.precio);
        
//         console.log(res.nombre);
//     });
// });


function confirmar(){
      //un confirm

};




$("#btnRecorrer").click(function () {


    
    swal({      title: "ESTAS SEGURO?",   
                text: "You will not be able to recover this imaginary file!",   
                type: "warning",   showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, CONFIRMAR",   
                cancelButtonText: "No, CANCELE",   
                closeOnConfirm: false,   
                closeOnCancel: false }, 
                
    function(isConfirm){   
    if (isConfirm) {  

    var numerovendedores = $('#tablavendedores tr').length;
    numerovendedores=numerovendedores-1;
    
    //alert('numero de filas'+numerovendedores);
    
    ///////////////////////////////////////////////////////////////////////////
    var hoy = new Date();
    var dia = hoy.getDate();
    var mes = hoy.getMonth() + 1 ;
    var año = hoy.getFullYear();
    var hora = hoy.getHours();
    var minuto = hoy.getMinutes();
    var segundo = hoy.getSeconds();
    if(dia<10){
        dia='0'+dia;
    }
    if(mes<10){
        mes='0'+mes;
    }
    if(hora<10){
        hora='0'+hora;
    }
    if(minuto<10){
        minuto='0'+minuto;
    }
    if(segundo<10){
        segundo='0'+segundo;
    }    
    var fecha = año+'-'+mes+'-'+dia;
    var hora = hora+':'+minuto+':'+segundo;
    var hoy = fecha+' '+hora;
    /////////////////////////////////////////////////////////////////////////////////
    var idProducto=$("#idProducto").val();
    var codigo = $("#CodVenta").val();
    var fecha = hoy;
    var tipomoneda = $("#tipomoneda").val();
    var preciototal = $("#preciototal").val();
    var preciopagado = $("#preciopagado").val();
    var vendedor = $("#vendedor").val();
    var sucursal = $("#nombresucursal").text();

    var descuento = (preciopagado*100)/preciototal;
    var descuento = 100-descuento;

    var route1 = "http://localhost/zzz/public/venta";
    var token = $("#token").val();

    alert("precio total"+preciototal);

    console.log(idProducto,codigo,fecha,tipomoneda,preciototal,vendedor,descuento);
    alert(descuento);
        $.ajax({
            url: route1,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST', 
            dataType: 'json',
            data:{CodVenta: codigo,fecha:fecha,vendedor:vendedor,preciototal:preciototal,descuento:descuento},
            success:function(){
            $("#msj-success").fadeIn();
            }  
        })


        
        $("#tabla tbody tr").each(function (index) {
          var campo1, campo2, campo3, campo4, campo5, campo6;    
            $(this).children("td").each(function (index2) {
                switch (index2) 
                {
                    case 0: campo1 = $(this).text();
                            break;
                    case 1: campo2 = $(this).text();
                            break;
                    case 2: campo3 = $(this).text();
                            break;
                    case 3: campo4 = $(this).text();
                            break;
                    case 4: campo5 = $(this).text();
                            break;

                    case 5: campo6 = $(this).text();
                            break;
                }
                $(this).css("background-color", "#ECF8E0");
            })

            alert(campo1 + ' - ' + campo2 + ' - ' + campo3+ ' - ' + campo4+ ' - ' + campo5);



            var route = "http://localhost/zzz/public/detalleventa";
            var token = $("#token").val();

            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',   
                dataType: 'json',
                data:{ producto: campo1,descripcion:campo3,cantidad:campo5,total:campo6,venta:codigo},

                success:function(){
                $("#msj-success").fadeIn();
                },
                error:function(msj){
                $("#msj").html(msj.responseJSON.genre);
                $("#msj-error").fadeIn();
                }
            })

        })//fin recorrido detalle venta


        $("#tablamoneda tbody tr").each(function (index) 
        {
            
            var moneda, monto;
            $(this).children("td").each(function (index2) 
            {
                switch (index2) 
                {
                    case 0: moneda = $(this).text();
                            break;
                    case 1: monto = $(this).text();
                            break;
                }
                $(this).css("background-color", "#ECF8E0");
            })

                var route = "http://localhost/zzz/public/pagoventa";
                var token = $("#token").val();

                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',   
                    dataType: 'json',
                    data:{venta:codigo,moneda: moneda,monto:monto},

                    success:function(){
                    $("#msj-success").fadeIn();
                    },
                    error:function(msj){
                    $("#msj").html(msj.responseJSON.genre);
                    $("#msj-error").fadeIn();
                    }
                })
                        $("#tablavendedores tbody tr").each(function (index) 
                        {
                            var vendedor;
                            $(this).children("td").each(function (index2) 
                            {
                            switch (index2) 
                                {
                                    case 0: vendedor = $(this).text();
                                    break;
                                
                                }
                                $(this).css("background-color", "#ECF8E0");
                            })

                            var comision=(monto*3/100)/numerovendedores;
                            alert(vendedor);

                            var route = "http://localhost/zzz/public/ventausuario";
                            var token = $("#token").val();

                            $.ajax({
                                url: route,
                                headers: {'X-CSRF-TOKEN': token},
                                type: 'POST',   
                                dataType: 'json',
                                data:{venta:codigo,usuario:vendedor,moneda: moneda,comision:comision},

                                success:function(){
                                $("#msj-success").fadeIn();
                                },
                                error:function(msj){
                                $("#msj").html(msj.responseJSON.genre);
                                $("#msj-error").fadeIn();
                                }                            
                            })
                        })//fin recorrido vendedores

            })//fin recorrido moneda

                        swal("SUCCESSFULL!", 
                            "VENTA AGREGADA CORRECTAMENTE.", 
                            "success");   
                    } else {     
                        swal("CALCELADO", 
                            "UD A CANCELADO LA OPERACION ",
                             "error");   
                    } 
                });
    
});
    

