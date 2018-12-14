 
function buscarcliente(){
	var url=$("#url").val();
	var cedula=$(".cedula").val();
	var ruta=url+'buscarcliente/'+cedula;

	$("#nombre, #apellido, #email, #telefono, #direccion, #usuario, #email").attr('value', '').empty();
	$("#password").removeAttr('readonly').removeAttr('disabled');

	$.get(ruta, function(cliente){
		
		$("#nombre").attr('value', cliente[0][0].nombre);
		$("#apellido").attr('value', cliente[0][0].apellido);
		$("#email").attr('value', cliente[0][0].email);
		$("#telefono").attr('value', cliente[0][0].telefono);
		$("#direccion").attr({'value' : cliente[0][0].direccion, 'placeholder' : cliente[0][0].direccion});
		$("#usuario").attr('value', cliente[1][0].username );
		$("#email").attr('value', cliente[1][0].email );
		$("#password").attr({ 'readonly' : 'readonly', 'disabled' : 'disabled' });

		$('#myclient').empty().append('<li>'+cliente[0][0].nombre+' '+cliente[0][0].apellido+'</li>');
	});
}

function buscarequipo() {
	var url=$("#url").val();
	var serial=$("#serial_equipo").val();
	var ruta=url+'buscarequipo/'+serial;

	$("#serial_fp, #nombre_equipo, #hashrate, #consumo").attr('value', '');

	$.get(ruta, function(equipo){
		$("#nombre_equipo").attr('value', equipo[1][0].nombre_equipo).attr('readonly', 'readonly');
		$("#hashrate").attr('value', equipo[1][0].hashrate).attr('readonly', 'readonly');
		$("#consumo").attr('value', equipo[1][0].consumo).attr('readonly', 'readonly');
		$("#serial_fp").attr('value', equipo[2][0].serial_fp).attr('readonly', 'readonly');
	});
}

$("[href='#next']").click(function(){
    var nombre_cliente=$('#nombre').val();
    var apellido_cliente=$('#apellido').val();
    var cedula_cliente=$('#cedula').val();
    var nombre_equipo=$('#nombre_equipo').val();
    var serial_equipo=$('#serial_equipo').val();
    var serial_fp=$('#serial_fp').val();
    var hashrate=$('#hashrate').val();

    $("#nombre_cliente2").empty().append(nombre_cliente);
    $("#apellido_cliente2").empty().append(apellido_cliente);
    $("#cedula2").empty().append(cedula_cliente);
    $("#nombre_equipo2").empty().append(nombre_equipo);
    $("#serial_equipo2").empty().append(serial_equipo);
    $("#serial_fp2").empty().append(serial_fp);
    $("#hashrate2").empty().append(hashrate);
});
