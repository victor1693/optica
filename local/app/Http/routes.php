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
Route::get('logout', 'con_login@salir'); 

Route::post('pventas', 'con_ventas@procesar_venta');//insertamos en la tabla temporal tarjetas
Route::post('listart', 'con_ventas@listar_tabla');//listamos la tabla de ventas
Route::post('temptarjetac', 'con_ventas@temp_tarjeta');//insertamos en la tabla temporal tarjetas
Route::post('tempchequec', 'con_ventas@temp_cheque');//insertamos en la tabla temporal tarjetas

Route::post('temptarjetas', 'con_ventas@s_temp_tarjeta');//seleccionamos en la tabla temporal tarjetas
Route::post('tempcheques', 'con_ventas@s_temp_cheque');//seleccionamos en la tabla temporal tarjetas

Route::post('temptarjetad', 'con_ventas@d_temp_tarjeta');//eliminamos en la tabla temporal tarjetas
Route::post('tempchequed', 'con_ventas@d_temp_cheque');//eliminamos en la tabla temporal tarjetas

});
 