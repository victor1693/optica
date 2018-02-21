<?php
Route::get('/', 'con_login@index');
Route::get('iniciar', 'con_login@index');
Route::get('administrator', 'con_administrator@index');

Route::get('register', 'con_register@index');
Route::get('tokken/{id}', 'con_register@token');
Route::get('error', function (){return view('error.error');});
Route::get('token', function (){return view('error.token');});
Route::get('terminos', function (){return view('terminos');});
Route::post('login', 'con_login@create');
Route::post('registro', 'con_register@create');

//Rutas administradores
Route::get('administrator', 'con_administrator@index');
Route::get('dashboard', 'con_dash@index');
Route::get('configuracion', 'con_configuracion@index');
Route::get('usuarios', 'con_usuarios@index');
Route::get('suspender/{id}', 'con_usuarios@suspender');
Route::get('activar/{id}', 'con_usuarios@activar');

Route::post('regusuario', 'con_usuarios@create');
Route::post('logadmin', 'con_administrator@login');

//Rutas con privilegios
Route::group(['middleware' =>'login'], function () { 
Route::get('inicio', 'con_home@index'); 
Route::get('logout', 'con_login@salir'); 
});
 