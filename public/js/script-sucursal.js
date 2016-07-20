$(document).ready(function(){
	Carga();
});


function Carga(){
	//tabla donde duardamos la lista de sucursales
	var tablaDatos = $("#datos-sucursal");
	var route = "http://localhost/Joyeria/public/sucursal";

	$("#datos-sucursal").empty();

	$.get(route, function(res){
		$(res).each(function(key,value)
		{
			tablaDatos.append("<tr><td>"+value.CodSucursal+"</td><td>"+value.NombreSucursal+"</td><td>"+value.Direccion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}


function Eliminar(btn){
	var route = "http://localhost/Joyeria/public/sucursal/"+btn.value+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});
}


function Mostrar(btn){
	var route = "http://localhost/Joyeria/public/sucursal/"+btn.value+"/edit";

	$.get(route, function(res){
		
		$("#id").val(res.id);
		$("#CodSucursal").val(res.CodSucursal);
		$("#NombreSucursal").val(res.NombreSucursal);
		$("#Direccion").val(res.Direccion);

	});
}






//////////////////////ACTUALIZAR SUCURSAL///////////////////////////////////7777////////7

$(document).on('click', '#actualizar',function (){
	
	var value = $("#id").val();

	var dato1 = $("#CodSucursal").val();
	var dato2 = $("#NombreSucursal").val();
	var dato3 = $("#Direccion").val();
	var route = "http://localhost/Joyeria/public/sucursal/"+value+"";
	var token = $("#token").val();




	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {"CodSucursal": dato1,"NombreSucursal":dato2,"Direccion":dato3},
		success: function(){
			
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});


});












///////////////////////REGISTRO SUCURSAL///////////////////////////////////////7
$(document).on('click', '#registro-sucursal',function (){
	//recuperamos valores
	var dato1 = $("#CodSucursal").val();
	var dato2 = $("#NombreSucursal").val();
	var dato3 = $("#Direccion").val();
	
	//ruta a la que hacemos referencia
	
	var route = "http://localhost/Joyeria/public/sucursal";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{CodSucursal: dato1,NombreSucursal:dato2,Direccion:dato3},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});