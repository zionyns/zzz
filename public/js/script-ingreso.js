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




$("#total" ).focus(function() {
 
  var unit = $("#unitario").val();
  var cant = $("#cantidad").val();

  var total = unit*cant;

  $("#total").val(total);

});




$("#btnRecorrer").click(function () 
    {

		var codigo = $("#CodIngreso").val();
 	 	var fecha = $("#fecha").val();
 	 	var usuario = $("#usuario").val();
 	 	var sucursal = $("#select-sucursales").val();

		alert(codigo + ' - ' + fecha + ' - ' + ' - ' + usuario+ ' - ' + sucursal); 	 	

		var route1 = "http://localhost/zzz/public/ingreso";
		var token = $("#token").val();

		$.ajax({
				url: route1,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',	
				dataType: 'json',
				data:{CodIngreso: codigo,sucursal:sucursal,usuario:usuario,fecha:fecha},

				success:function(){
				$("#msj-success").fadeIn();
				},
				error:function(msj){
				$("#msj").html(msj.responseJSON.genre);
				$("#msj-error").fadeIn();
				}
		
		})
	
        $("#tabla tbody tr").each(function (index) 
        {
            var campo1, campo2, campo3;
            $(this).children("td").each(function (index2) 
            {
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
                    
                }
                $(this).css("background-color", "#ECF8E0");
            })

            //alert(campo1 + ' - ' + campo2 + ' - ' + campo3+ ' - ' + campo4+ ' - ' + campo5);



            var route = "http://localhost/zzz/public/detalleingreso";
			var token = $("#token").val();

			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',	
				dataType: 'json',
				data:{producto: campo1,PrecioUnitario:campo2,cantidad:campo3,total:campo4,ingreso:codigo},

				success:function(){
				$("#msj-success").fadeIn();
				},
				error:function(msj){
				$("#msj").html(msj.responseJSON.genre);
				$("#msj-error").fadeIn();
				}
				})

        })
    });

