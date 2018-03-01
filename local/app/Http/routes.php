<?php
Route::get('/', 'con_login@index');
Route::get('iniciar', 'con_login@index');
Route::get('administrator', 'con_administrator@index');

Route::get('error', function (){return view('error.error');});
Route::get('terminos', function (){return view('terminos');});
Route::post('login', 'con_login@create');

 
//Route::get('register', 'con_register@index');
//Route::get('tokken/{id}', 'con_register@token');

//Route::get('token', function (){return view('error.token');});

//Route::post('registro', 'con_register@create');

//Rutas usuarios

//Rutas administradores

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

});



//Rutas con privilegios
Route::group(['middleware' =>'login'], function () { 
//Route::get('inicio', 'con_home@index');
Route::get('usdash', function (){return view('us_dash');}); 
Route::get('logout', 'con_login@salir'); 
});
 