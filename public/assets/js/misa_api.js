const url = $("meta[name=base_url]").attr('content');

function realTime(){
    $.ajax({
    //async: false,
        url: url+'/realtime',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            $("#_real_time").html(''); 
            $("#_real_time").html(data.datos.shares_15m+' GH/s'); //realTime
            $("#_hashrate_hoy").html(data.datos.shares_1d+' GH/s'); //24 H;
        }
    });
 }

//mineros
 function mineros(){
    $.ajax({
        url: url+'/mineros',
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
        url: url+'/gananciasHoy',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            //C
            $("#_ganancia_hoy").html(number_format((data.datos.earnings_today*0.00000001), 8, '.', '')+' BTC'); //estimado hoy 

            console.log(number_format((data.datos.earnings_today*0.00000001), 8, '.', '')+' BTC');

            $("#_ganancia_ayer").html(number_format((data.datos.earnings_yesterday*0.00000001), 8, '.', '')+' BTC'); //Ayer

            //D
            $("#_balance").html(number_format((data.datos.unpaid*0.00000001), 8, '.', '')+' BTC');
            $("#total_pagado").html(number_format((data.datos.total_paid * 0.00000001), 8, '.', '')+' BTC'); //total pagado

            var a = moment.unix(data.datos.last_payment_time).format("DD-MM-YYYY hh:mm a");

            $("#_ultimo_pago").html(a); //ultimo pago
            
            $("#_pago_pendiente").html(number_format((data.datos.pending_payouts*0.00000001), 8, '.', '')+' BTC'); //pago pendiente

        }
    });
}

//Hash de la Red
function hashRate(){
    $.ajax({
        url: url+'/poolHasrate',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            //C
            $("#_pool").html(data.datos.btc.stats.shares.shares_15m); //estimado hoy 
            $("#_bar_red").css('width', ((data.datos.btc.stats.shares.shares_15m*100)/7)+'%')
        }
    });
}

//networkStatus
function networkStatus(){
    $.ajax({
        url: url+'/networkStatus',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            var str = data.datos.btc.hashrate.toString();
            var num = str.substr(0, 3);
            num = parseInt(num)
            $("#_pool_redes").html(num/10); //network status
            $("#_bar_pool").css('width', (((data.datos.btc.stats.shares.shares_15m)*100)/25)+'%')
        }
    });
}


var options = {
    chart: {
        renderTo: '_grafica',
        type: 'spline',
    },
    title: {
        text: 'Promedio de Hashrate diario'
    },
    xAxis: {
        categories: []
    },
    yAxis: {
        title: {
            text: 'Hashrate (PH/s)'
        },
        labels: {
            formatter: function () {
                return this.value ;
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 2,
                lineColor: '#666666',
                lineWidth: 1,
                 fillOpacity: 0.3,
            }
        }
    },

    series: [{
        name: 'Hashrate',
        type:'area',
        data: []

    }]
};

function grafica(){
     options.xAxis.categories = [];
     options.series[0].data = [];
  
    $.ajax({
        url: url+'/grafica',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            var ejeX = data.datos.categorias;
            var dataSeries = data.datos.valores;

            for (var i = ejeX.length - 1; i >= 0; i--) {
                options.xAxis.categories.push(ejeX[i]); 
            }

            for (var i = dataSeries.length - 1; i >= 0; i--) {
                options.series[0].data.push(parseFloat(dataSeries[i]));
            }



        Highcharts.chart(options );

        }
    });
}

function info_user(){
    $.ajax({
        url: url+'/usuario',
        type: 'get',
        dataType: "json",
        //data:{},
        success: function(data) {
            //C
            $("#_email_usuario").html(data.datos.user_email); 

        }
    });
}


grafica();
info_user();
mineros();
gananciasHoy();
realTime();
hashRate();
networkStatus();

function _load(){
    gananciasHoy();
    realTime();
    hashRate();
    networkStatus();
}

//setInterval(_load, 10000/*300000*/);


/*
function convertToBTCFromSatoshi($value) {
    $BTC = $value / 100000000 ;
    return $BTC;
}
function formatBTC($value) {
    $value = sprintf('%.8f', $value);
    $value = rtrim($value, '0') . ' BTC';
    return $value;
}
echo formatBTC(convertToBTCFromSatoshi(5000));

*/


function number_format (number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase
  //  discuss at: http://locutus.io/php/number_format/
  // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  // improved by: Kevin van Zonneveld (http://kvz.io)
  // improved by: davook
  // improved by: Brett Zamir (http://brett-zamir.me)
  // improved by: Brett Zamir (http://brett-zamir.me)
  // improved by: Theriault (https://github.com/Theriault)
  // improved by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Michael White (http://getsprink.com)
  // bugfixed by: Benjamin Lupton
  // bugfixed by: Allan Jensen (http://www.winternet.no)
  // bugfixed by: Howard Yeend
  // bugfixed by: Diogo Resende
  // bugfixed by: Rival
  // bugfixed by: Brett Zamir (http://brett-zamir.me)
  //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  //  revised by: Luke Smith (http://lucassmith.name)
  //    input by: Kheang Hok Chin (http://www.distantia.ca/)
  //    input by: Jay Klehr
  //    input by: Amir Habibi (http://www.residence-mixte.com/)
  //    input by: Amirouche
  //   example 1: number_format(1234.56)
  //   returns 1: '1,235'
  //   example 2: number_format(1234.56, 2, ',', ' ')
  //   returns 2: '1 234,56'
  //   example 3: number_format(1234.5678, 2, '.', '')
  //   returns 3: '1234.57'
  //   example 4: number_format(67, 2, ',', '.')
  //   returns 4: '67,00'
  //   example 5: number_format(1000)
  //   returns 5: '1,000'
  //   example 6: number_format(67.311, 2)
  //   returns 6: '67.31'
  //   example 7: number_format(1000.55, 1)
  //   returns 7: '1,000.6'
  //   example 8: number_format(67000, 5, ',', '.')
  //   returns 8: '67.000,00000'
  //   example 9: number_format(0.9, 0)
  //   returns 9: '1'
  //  example 10: number_format('1.20', 2)
  //  returns 10: '1.20'
  //  example 11: number_format('1.20', 4)
  //  returns 11: '1.2000'
  //  example 12: number_format('1.2000', 3)
  //  returns 12: '1.200'
  //  example 13: number_format('1 000,50', 2, '.', ' ')
  //  returns 13: '100 050.00'
  //  example 14: number_format(1e-8, 8, '.', '')
  //  returns 14: '0.00000001'

  number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
  var n = !isFinite(+number) ? 0 : +number
  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
  var s = ''

  var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
      .toFixed(prec)
  }

  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
  }

  return s.join(dec)
}