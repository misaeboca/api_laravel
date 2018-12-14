//    var base = $('#url').val();
//    var asset= $('#asset').val();
//    var id=$('#racks').val();
//    var arr = id.split("-");    //console.log(id, arr[0], arr[1], arr[2]);
//    var ruta=base+"/posicionequipos/"+arr[0];   //console.log(ruta);
//    $('#spacesracks').empty();

//    $.get(ruta, function(response){
//        for ( i = 0; i < response.length; i++) {
//           $('#spacesracks td#'+response[i].posicion).attr({'onclick':'ocupado()'}).empty().append('<img style="width:50px;" src="'+asset+'assets/images/minero_100_operativo.gif">');
//        }
//    });
//});

/*
function crearmodal(id){
    $("body").append('<div id="serializar'+id+'" class="m-t-20 w3-modal w3-text-black"><div class="w3-modal-content" style="width: 25%;">   <div class="w3-container"> <span onclick="openmodal('+id+')" class="w3-right btn w3-text-grey w3-hover-text-red">X</span><h4 class="w3-center">Serializar</h4> <p>Serial Equipo<br> <input class="w3-input" type="text" oninput="comprobar2('+id+');" onchange="comprobarserialequipo('+id+')" id="serial_equipo'+id+'"> </p> <p>Serial Fuente<br> <input class="w3-input" type="text" oninput="comprobar2('+id+')" onchange="comprobarserialfuente('+id+')" id="serial_fuente'+id+'" > </p> <p onclick="checathis('+id+');" class="w3-left"><span class="w3-small w3-border w3-btn">Verifcar</span></p></div><div class="modal-footer" style="display:none;" id="pieserial'+id+'"> <span onclick="desmontarseriales('+id+')" class="w3-border btn btn-default" style="display:none;" >Remover</span> <span onclick="montarseriales('+id+');" class="btn btn-info">Aceptar</span>                </div> </div>  </div>');
}
*/

function checathis(id){
    comprobar(id);
}
function comprobar(id){
    var url=$("#url").val();
    var seqp=$("input#serial_equipo"+id).val();
    var sfnt=$("input#serial_fuente"+id).val();
    if(seqp !=''  && sfnt !='' ){
        $('div#pieserial'+id).show();
    }
    else{
        $('div#pieserial'+id).hide();
    }
}

function comprobar2(id){
    var seqp=$("input#serial_equipo"+id).val();
    var sfnt=$("input#serial_fuente"+id).val();
    if(seqp ==''  || sfnt =='' ){
        $('div#pieserial'+id).hide();
    }
}

function openmodal(id){
    $("#serializar"+id).modal({backdrop: "static"});
    comprobar(id);
}

function closemodal(id){
    $("#serializar"+id).modal("hide");
}

function ocupado(){
    $("#alertaocupado").fadeIn('slow').addClass('w3-yellow').fadeOut('9900').removeClass('w3-yellow');
}


function comprobarserialequipo(id) {
    var url=$("#url").val();
    var este=$("input#serial_equipo"+id).val(); //console.log("Equipo Ingresando : "+este);
    var ruta=url+'/buscarequipo/'+este;
    $.get(ruta, function(respuesta){
        if (respuesta == 1) {
            alert('Ese Serial De Equipo Ya Existe Registrado');
            $("input#serial_equipo"+id).val('');
            comprobar2(id);
        }
    });
    $("#lista .serialequipo").each(function(){
        var ya=$(this).attr('value');           //console.log(ya);
        if(ya == este){
            alert('Ese Serial De Equipo Ya Existe Registrado Aqui');
            $("input#serial_equipo"+id).val('');
        }
    });
}

function comprobarserialfuente(id){
    var url=$("#url").val();
    var esta=$("input#serial_fuente"+id).val(); //console.log("Fuente Ingresando : "+esta);
    var ruta=url+'/buscarfuente/'+esta;
    $.get(ruta, function(respuesta){
        if (respuesta == 1) {
            alert('Ese Serial De Fuente Ya Existe');
            $("input#serial_fuente"+id).val('');
            comprobar2(id);
        }
    });
    $("#lista .serialfuente").each(function(){
        var ia=$(this).attr('value');
        if(ia == esta){
            alert('Ese Serial De Fuente Ya Existe Aqui');
            $("input#serial_fuente"+id).val('');
        }
    });
}


function montarseriales(id){
    var checados = $('td.checked').length;
    var ckactual = $("#totally").attr('value');
    var ckmax=$("#totally").attr('total');
    
    if( parseInt(ckactual) > 0 ){
        $("#serial_equipo"+id).attr('readonly', 'readonly');
        $("#serial_fuente"+id).attr('readonly', 'readonly');
        $("td#"+id).addClass('checked');
        $("#serializar"+id).addClass('checked');
        $("td#"+id).children("img").toggle();
        $('#pieserial'+id).children("span").toggle();
        enlistar(id);
        closemodal(id);
        $("#totally").attr('value', ckactual-1).empty().append(ckactual-1);
    }
    else{
        alert('Ya Has Instalado La Cantidad Solicitada');
        closemodal(id);
    }
}


function enlistar(id){
    var rck=$("td#"+id).parents("tbody").attr("rck");
    var idr=$("td#"+id).parents("tbody").attr("idr");
    var are=$("td#"+id).parents("table").attr("area");
    var ida=$("td#"+id).parents("table").attr("ida");

    var valor_equipo=$("#serial_equipo"+id).val();
    var valor_fuente=$("#serial_fuente"+id).val();
    
    var valsala=$("#selectsalas").val();
    var vsala=valsala.split("-");
    
    var equipo='<b class="serialequipo" value="'+valor_equipo+'"> Equipo : '+valor_equipo+'</b><br>';
    var fuente='<b class="serialfuente" value="'+valor_fuente+'"> Fuente : '+valor_fuente+'</b><br>';
    var sala='<sala value="'+vsala[0]+'"> Sala : '+vsala[1]+'</sala>';
    var area='<area value="'+ida+'"> Area : '+are+'</area>';
    var rack='<rack value="'+idr+'"> Rack : '+rck+'</rack>';
    var posi=$("td#"+id).attr("posicion");
    var realposi=$("td#"+id).attr("realposicion");
    var posicion='<br><posicion>Posición (Fila - Columna) : '+posi+'</posicion>';

    var lista=$('#lista').prepend('<div class="w3-text-black ribbon-wrapper-reverse w3-small" style="border-bottom: 1px solid orange;" id="elemento'+id+'">'+equipo+fuente+sala+area+rack+posicion+'<div class="ribbon ribbon-corner ribbon-right ribbon-warning"><i class="w3-large mdi mdi-dns"></i></div></div>' );
    $("#procesar").show();

    var inputs=$('#elemento'+id).append('<input style="overflow: hidden;" type="hidden" name="serial_equipo[]" value="'+valor_equipo+'"> <input type="hidden" name="serial_fuente[]" value="'+valor_equipo+'"> <input type="hidden" name="sala_id[]" value="'+vsala[0]+'"> <input type="hidden" name="area_id[]" value="'+ida+'"> <input type="hidden" name="rack_id[]" value="'+idr+'"> <input type="hidden" name="posicion[]" value="'+realposi+'">');
}




function desmontarseriales(id) {
    $("td#"+id+"").removeClass('checked');
    $("td#"+id+"").children("img").toggle();
    $("#serializar"+id+"").removeClass('checked');
    $("#serial_equipo"+id+"").removeAttr('readonly').val('');
    $("#serial_fuente"+id+"").removeAttr('readonly').val('');
    $("#pieserial"+id).children("span").toggle();
    $("#elemento"+id+"").remove();
    var valor_actual=parseInt($("#totally").attr('value'));
    var valor_total=parseInt($("#totally").attr('total'));
    var sum=valor_actual+1
    $("#totally").attr('value', sum).empty().append(sum);
        
    var actwo=parseInt($("#totally").attr('value'));
    var ttal=parseInt($("#totally").attr('total'));
        
    if (actwo == ttal) {
        $("#procesar").hide();
    }
    else{
        $("#procesar").show();
    }    
    closemodal(id);
}


function total_instalar() {
    var sum=0;
    $(".equipos_total #_cantidad").each(function(){
        var ctd=$(this).attr('subtotal');
        if (ctd=='') {
            ctd=0;
        }
        var ct=parseInt(ctd);
        sum=(sum+ct);
        $("#totally").empty().append(sum).attr('total', sum).attr('value', sum);
        $("#cantidad_total").val(sum);
    });
}

function salazar(id) {
    $(".areas, .racks, .Rack").hide();
    var separar=id.split("-");
    var true_id=separar[0];
    $("#areas"+true_id).show();
}

function arez(id){
    $(".racks, .Rack").hide();
    var separar=id.split("-");
    var true_id=separar[0];
    $("#rac"+true_id).show();
}

function ramadam(id){
    $(".Rack").hide();
    var separar=id.split("-");
    var true_id=separar[0]
    $("#spacesracks"+true_id).show();
}

function ubicardatos(rack, posicion){
    var asset=$("#asset").val();
    var id=rack+posicion;
    $('td#'+id).attr('onclick', 'ocupado()');
    $('td#'+id).empty().append('<img src="'+asset+'assets/images/minero_100_operativo.gif" style=" width:35px;">');
}