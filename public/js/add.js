
function addequipo(){
	$('#bodyfactura').show();

	var tk=$("#artk").val().split("_");
	var artk = tk[1];
	var article='<td id="_article">'+artk+'</td>';
	
	var product=$("#all").val().split("_");
	var idproduct = product[0];
	var productnombre = product[3];
	var pdct='<td id="_model">'+productnombre+'<input type="hidden" value="'+idproduct+'" name="producto_id[]" ></td>';

	var qtt=$("#cntdd").val();
	var quantity='<td id="_quantity">'+qtt+'<input type="hidden" value="'+qtt+'" name="cantidad[]" ></td>';

	var prc=$("#prize").val();
	var price='<td id="_price">'+prc+'<input type="hidden" value="'+prc+'" name="precio[]" ></td>';
	
	var descount='<td id="descount">0,00</td>';
	
	var subtotal=(qtt*prc);
	var subtotall='<td id="_subtotal" value="'+subtotal.toFixed(2)+'">'+subtotal.toFixed(2)+'</td>';
	
	var options='<td id="_options"></td>';

	$('#tbody_factura').append('<tr id="tr_factura">'+article+pdct+quantity+price+descount+subtotall+options+'</tr>');
	
	$('#tr_factura td').last().append('<span id="minus" onclick="" class=" w3-text-grey w3-large w3-hover-text-red">\u00D7</span>');

	$("#tr_factura td").find("span").attr('onclick', '$(this).parents("tr").remove();numeracion();total();');

	total();
    numeracion();
    $("#one select").val('');
    $("#two select").val('');
    $("#three input").val('');
    $("#four input").val('');
    $("#two, #three, #four, #five").hide();
}

function total() {
	var sum=0;
	$("#tbody_factura #_subtotal").each(function(){
        var stl=$(this).attr('value');
        var st=parseFloat(stl);
        sum=(sum+st);
        
        if (parseInt(sum) > 0) {
        	$('#tfoot_factura #ttal').empty().append(sum+' $USD <input type="hidden" value="'+sum+'" name="total">');
        	$("#btn_enviar").show();
        }
    });
}

function numeracion() {
	var more=$('#tbody_factura tr').last().index();
	
	if (more==0) {
		$('#bodyfactura').hide();
		$("#btn_enviar").hide();
	}
	else if (more==1) {
		$('#tfoot_factura #_num').empty().append(more+' Tipo de Artículo');
	}
	else{
		$('#tfoot_factura #_num').empty().append(more+' Tipos de Artículos');
	}
}