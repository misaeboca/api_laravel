<?php
use Illuminate\Http\Request;

	Route::get('/login', ['as'=>'login', function(){ return view('auth.login'); }]);

	Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@Logout']);
	Route::post('logueando/', 'Auth\LoginController@Login')->name('user.login');
	Route::get('password/reset', ['as' => 'password.request', function () { return view('auth.passwords.email'); }]);

	Route::any('/', 'HomeController@index');
	Route::any('/home', 'HomeController@index')->name('home');
	Route::get('changePassword','HomeController@showChangePasswordForm');
	Route::post('changePassword','HomeController@changePassword')->name('changePassword');
	Route::post('emailReset', 'HomeController@passwordReset')->name('password.email_reset');

Route::group(['middleware'=>['web', 'auth']], function(){
	
	Route::group([ 'middleware'=>'is_user' ], function(){
		Route::get('/Cliente', function(){ return view('layouts.index'); })->name('cliente');

		Route::get('/ganancias', function() { return view('clients.ganancias'); });
		Route::get('mineria', function() { return view('clients.mineros'); });
		Route::get('cobranza', function () {return view('layouts.cobranza.index');});
		//dashboard
    	Route::get('realtime', 'BTController@realTime')->name('btc.realtime');
    	Route::get('mineros', 'BTController@mineros')->name('btc.mineros');
    	Route::get('gananciasHoy', 'BTController@gananciasHoy')->name('btc.gananciasHoy');
    	Route::get('hashRed', 'BTController@gananciasHoy')->name('btc.hashred');
    	Route::get('poolHasrate', 'BTController@poolHasrate')->name('btc.poolHasrate');
    	Route::get('usuario', 'BTController@usuario')->name('btc.usuario');
    	Route::get('grafica', 'BTController@grafica')->name('btc.grafica');
    	Route::get('networkStatus', 'BTController@networkStatus')->name('btc.networkStatus');

    	//tabla mienria, datos mineros
    	Route::get('datosMineros', 'BTController@datosMineros')->name('btc.datosMineros');
    	Route::get('historialGanancias', 'BTController@historialGanancias')->name('btc.historialGanancias');
    	Route::get('eliminarGanancias', 'BTController@eliminarGanancias')->name('btc.eliminarGanancias');
	});

	
	Route::group(['middleware'=>'is_admin'], function(){
		Route::get('/Superadmin', function(){ return view('layouts.admin.index'); })->name('todos');

		Route::get('/Personal', 'AdminController@ViewPersonal')->name('personal');

		Route::post('/Registrar/Personal', 'AdminController@Registro')->name('registrar.personal');

   		Route::get('/Admin', ['as' => 'admin', function () { return view('layouts.admin.index'); }]);

		Route::post('/Registrar/Usuario', 'AdminController@UsuarioPersonal')->name('usuario.personal');
		
		Route::any('/Galpones/Racks','AdminController@gprk')->name('galpones.racks');

		Route::post('/Registrar/Sala', 'AdminController@GalponReg')->name('registrar.galpon');

		Route::post('/registrar/rack', 'AdminController@RackReg')->name('registrar.rack');
   	});

   	
	   	Route::group(['middleware'=>'is_installer'], function(){
	   		Route::get('/Instalador', 'InstaladoresController@index')->name('instalador');
	   		Route::get('/Atender/Instalacion/{cliente_id}', 'InstaladoresController@VistaAtencion')->name('atender.instalacion');

			Route::get('/Instalacion', 'InstaladoresController@FormInstalacion')->name('instalacion');
			
			Route::post('/Instalacion','InstaladoresController@Instalacion')->name('registrar.instalacion');
			
			Route::get('/Historial/instalaciones', 'InstaladoresController@historial')->name('historial');
			
			Route::get('/Rendimiento', 'InstaladoresController@estadisticas_rendimiento')->name('rendimiento');
			
			Route::get('/racks/{id}','InstaladoresController@ajaxracks')->name('racks');
	   		
	   		Route::get('/posicionequipos/{id}','InstaladoresController@ajaxposiciones')->name('posicion.equipos');
	   		
	   		Route::get('/buscarcliente/{cedula}', 'InstaladoresController@buscarcliente');
			
			Route::get('/buscarequipo/{serial}', 'InstaladoresController@buscarequipo');
		});


	   	/* Cambiar is_installer por is_vendedor Cuando haya hecho el middleware */
		Route::group(['middleware'=>'is_ventas'], function(){
	   		Route::get('/Ventas', 'VentasController@clientes')->name('Ventas');
			Route::post('/Registrar/Cliente', 'VentasController@RegCliente')->name('registrar.cliente');
			Route::post('/Registrar/Preventa', 'VentasController@RegPreventa')->name('registrar.preventa');
			Route::get('/Atender/Venta', 'VentasController@SolicitudFactura')->name('atender.preventa');
		});


		
		/* Cambiar is_installer por is_almacen Cuando haya hecho el middleware */
		Route::group(['middleware'=>'is_deposito'], function(){
			Route::get('/Almacen', 'AlmacenController@index')->name('almacen');
			Route::get('/Equipos/Fuentes_Poder','AlmacenController@eqft')->name('equipos.fuentes');
			Route::post('/registrar/FP','AlmacenController@regfp')->name('registrar.fp');
			Route::post('/registrar/Equipo','AlmacenController@regequipo')->name('registrar.equipo');
	   		Route::get('/Recibir/equipos', 'AlmacenController@RecibirLote')->name('recibir.lote');
			Route::post('/Recibir/equipos', 'AlmacenController@LoteEquipos')->name('lote.equipos');
			
			/*Sin Accion por el momento*/
			Route::get('/Equipos', 'AlmacenController@')->name('deposito.equipos');
			Route::get('/Fuentes_Poder', 'AlmacenController@')->name('deposito.fuentes');
			/***************************/
		});

});