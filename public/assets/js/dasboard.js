function realTime(){
    $.ajax({
    //async: false,
        url: 'api/realtime',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            $("#_real_time").html(''); 
            $("#_real_time").html(data.datos.shares_15m); //realTime
            $("#_hashrate_hoy").html(data.datos.shares_1d); //24 H;
        }
    });
 }

//mineros
 function mineros(){
    $.ajax({
        url: 'api/mineros',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            $("#workers_a").html(data.datos.workers_active); //activos
            $("#workers_i").html(data.datos.workers_inactive); //inactivos
            $("#workers_t").html(data.datos.workers_total); //total
        }
    });
 }


//Ganancias Hoy  - timeout
function gananciasHoy(){
    $.ajax({
        url: 'api/gananciasHoy',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            //C
            $("#_ganancia_hoy").html(data.datos.earnings_today); //estimado hoy 
            $("#_ganancia_ayer").html(data.datos.earnings_yesterday); //Ayer

            //D
            $("#_balance").html(data.datos.unpaid);
            $("#total_pagado").html(data.datos.total_paid); //total pagado
            $("#_ultimo_pago").html(data.datos.last_payment_time); //ultimo pago
            $("#_pago_pendiente").html(data.datos.pending_payouts); //pago pendiente

        }
    });
}
realTime();
gananciasHoy();
mineros();

function hola(){
    gananciasHoy();
    realTime();
}
setInterval(hola, 10000);