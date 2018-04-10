<?php
Route::get('/', 'con_login@index');
Route::get('iniciar', 'con_login@index');
Route::get('administrator', 'con_administrator@index');

Route::get('error', function (){return view('error.error');});
Route::get('terminos', function (){return view('terminos');});
Route::post('login', 'con_login@create'); 

//Rutas con privilegios
Route::get('administrator', 'con_administrator@index');
Route::post('logadmin', 'con_administrator@login');
Route::group(['middleware' =>'administrator'], function () { 
Route::get('enviar_clave/{id}', 'con_usuarios@enviar_clave');
Route::get('dashboard', 'con_dash@index');
Route::get('configuracion', 'con_configuracion@index');
Route::get('usuarios', 'con_usuarios@index');
Route::get('suspender/{id}', 'con_usuarios@suspender');
Route::get('activar/{id}', 'con_usuarios@activar');
Route::get('logoutadmin', 'con_administrator@salir'); 
Route::post('regusuario', 'con_usuarios@create');
Route::post('editar_registro', 'con_usuarios@editar');
Route::post('clave', 'con_configuracion@create');
Route::get('kardex', 'con_kardex@index');

});



//Rutas con privilegios
Route::group(['middleware' =>'login'], function () { 
Route::get('usdash', 'con_home@index');
Route::get('procesarv', 'con_ventas@create');//procesar ventas
//Route::get('usdash', function (){return view('us_dash');}); 
Route::get('logout', 'con_login@salir'); //Cerrar sesion
Route::get('inscripcion', 'con_inscripcion@index'); //Revuelve la vista de inscripcion hospital
Route::get('saldos', 'con_saldos@index'); //Revuelve la vista de saldos
Route::get('cotizacion', 'con_cotizacion@index'); //Revuelve la vista de cotizacion
Route::get('buscar', 'con_buscar@index'); //Revuelve la vista de buscar
Route::get('misventas', 'con_ventas@mis_ventas'); //Revuelve la vista de buscar


Route::get('entregado', 'con_hospital@entregado'); //Revuelve la vista de entregado hospital
Route::get('fabricacion', 'con_hospital@fabricacion'); //Revuelve la vista de fabricacion hospital
Route::get('contabilizados', 'con_contabilizados@index'); //Revuelve la vista de cotizacion
Route::get('imprimir', 'con_imprimir@index'); //Revuelve la vista de cotizacion
Route::post('pventas', 'con_ventas@procesar_venta');//insertamos en la tabla temporal tarjetas
Route::post('listart', 'con_ventas@listar_tabla');//listamos la tabla de ventas
Route::post('temptarjetac', 'con_ventas@temp_tarjeta');//insertamos en la tabla temporal tarjetas
Route::post('tempchequec', 'con_ventas@temp_cheque');//insertamos en la tabla temporal tarjetas
Route::post('temporale', 'con_ventas@borrar_temporales');//insertamos en la tabla temporal tarjetas
Route::post('temptarjetas', 'con_ventas@s_temp_tarjeta');//seleccionamos en la tabla temporal tarjetas
Route::post('tempcheques', 'con_ventas@s_temp_cheque');//seleccionamos en la tabla temporal tarjetas
Route::post('temptarjetad', 'con_ventas@d_temp_tarjeta');//eliminamos en la tabla temporal tarjetas
Route::post('tempchequed', 'con_ventas@d_temp_cheque');//eliminamos en la tabla temporal tarjetas


//Rutas de clientes
Route::get('cliente', 'con_clientes@index'); //Revuelve la vista de clientes
Route::post('clientess', 'con_clientes@select'); //Revuelve la vista de clientes
Route::post('clienteunico', 'con_clientes@selectunico'); //Devuelve los datos de un cliente filtrado por un id
Route::post('clientec', 'con_clientes@create'); //Agrega un cliente en la base de datos
Route::post('clienteup', 'con_clientes@update'); //Actualiza un cliente en la base de datos
Route::post('buscarcliente', 'con_clientes@buscar'); // Busca un cliente en la base de datos.

//Rutas de facturacion
Route::post('facturac', 'con_factura@create'); //inserta una factura
Route::post('selectfacturas', 'con_factura@select'); //inserta una factura
Route::get('detallefac', 'con_factura@detalle'); //muestra la vista detalle de factura

//Rutas de pagos
Route::post('efectivo', 'con_pagos@efectivo'); // Inserta un pago de tipo efectivo
Route::post('transferencia', 'con_pagos@transferencia'); //Inserta un pago de tipo transferencia
Route::post('tarjeta', 'con_pagos@tarjeta'); //Inserta un pago de tipo tarjeta
Route::post('cheque', 'con_pagos@cheque'); //Inserta un pago de tipo cheque
});
 