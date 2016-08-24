$(document).ready(function(){

      Carga();
});




function Carga(){
	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $("#datos-ventas");
	var route = "http://localhost/zzz/public/venta";

	$("#datos-ventas").empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.CodVenta+"</td><td>"+value.fecha+"</td><td>"+value.vendedor+"</td><td>"+value.preciototal+"</td><td>"+value.descuento+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-success' data-toggle='modal' data-target='#myModal'>verPDF</button><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}
