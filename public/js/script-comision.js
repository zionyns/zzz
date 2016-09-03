

function Carga(nombre,fechaInicial,fechaFinal){
	//tabla donde duardamos la lista de comisiones
	var tablaDatos = $("#tablaComisiones > tbody");
	var route = "http://localhost/zzz/public/comisiones";

	var vendedor=$("#vendedor").val();
	
	$("#tablaComisiones > tbody").empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			var fechaUsuario=value.created_at;
			var arregloFechaUsuario=fechaUsuario.split(" ");
			var fechaReferente=arregloFechaUsuario[0].trim();
			fechaReferente=fechaReferente.replace(/[/]/gi,"-");
			
			if(nombre==value.usuario && fechaInicial<=fechaReferente && fechaFinal>=fechaReferente)
			{	
				tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.venta+"</td><td>"+value.moneda+"</td><td>"+value.comision+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
			}
			
		});

		$(function () {
   

    $('#tablaComisiones').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  		});

	});
}