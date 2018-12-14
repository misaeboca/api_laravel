function factura(){
	var datos=$('.selection #select2-searchclient-container').attr('title');

	var dato=datos.split('-');
	var id=dato[0];
	var cedula= parseInt(dato[1]);
	var nombre= dato[2];
	var apellido= dato[3];
	
	$('#cliente_id').attr('value', id);
	$('#cliente_cedula').val(cedula);
	$('#cliente_nombres').val(nombre+' '+apellido);
	var dni = $('#cliente_cedula').val();
	if (dni != '') {
		$('#_factura, #btn_enviar').removeClass('w3-hide');
	}
}

function tproduc(id) {
    var true_id=id.split("_");
    $("#two select option."+true_id[0]).show();
    $("#two select option").not('.'+true_id[0]).hide();

    $("#two").show();
    $("#all").val('');
    $("#three, #four, #five").hide();
    
    //$("#pt"+true_id+' select').addClass('model');
}

function viewquantity() {
    $("#three").show();
    var datos=$('#all').val();

    var dato=datos.split('_');
    var cantidad= parseInt(dato[1]);
    var pvp = parseInt(dato[2]);
    
    var valcant=$('#cntdd').val();

    $('#cntdd').attr('max', cantidad);
    $('#prize').val(pvp);

    if (valcant > cantidad ) {
        $('#cntdd').val(cantidad);
    }
}


function compctd() {
    var num=$("#cntdd").val();
    var min=$("#cntdd").attr('min');
    var max=$("#cntdd").attr('max');
    if ( num < parseInt(min) || num > parseInt(max) ) {
        $("#four, #five").hide();
    }
    else{
    	cinco();
    }
}

function cinco(argument) {
	var prezio=$("#prize").val();
    $("#four").show();
    	
    if (prezio > 0) {
    	$("#five").show();
    }
    else{
    	$("#five").hide();
    }
}