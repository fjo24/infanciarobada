<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PaginasController@home')->name('inicio');

Auth::routes();

Route::get('/home', 'Adm\AdminController@admin')->name('home');

//EMPRESAS
Route::get('/empresa', 'PaginasController@empresa')->name('empresa');

//NOTICIA
Route::get('noticiainfo/{id}', 'PaginasController@noticiainfo')->name('noticiainfo');

//EVENTO
Route::get('eventoinfo/{id}', 'PaginasController@eventoinfo')->name('eventoinfo');
//EMPRESAS
Route::get('/empresa', 'PaginasController@empresa')->name('empresa');

/*------------Imagen----------------*/
    Route::get('noticias/{noticia_id}/imagenes/', 'Adm\NoticiasController@imagenes')->name('imgnoticias.lista'); //index del modulo imagenes
//agregar imagenes de seccion noticias
    Route::post('noticias/{id}/imagen/', 'Adm\NoticiasController@nuevaimagen')->name('imgnoticias.nueva'); //es el store de las img de empresa
    Route::delete('imgnoticias/{id}/destroy', [
        'uses' => 'Adm\NoticiasController@destroyimg',
        'as'   => 'imgnoticias.destroy',
    ]);
/*------------Imagen----------------*/
    Route::get('eventos/{evento_id}/imagenes/', 'Adm\EventosController@imagenes')->name('imgeventos.lista'); //index del modulo imagenes
//agregar imagenes de seccion eventos
Route::post('eventos/{id}/imagen/', 'Adm\EventosController@nuevaimagen')->name('imgeventos.nueva'); //es el store de las img de empresa

Route::delete('imgeventos/{id}/destroy', [
        'uses' => 'Adm\EventosController@destroyimg',
        'as'   => 'imgeventos.destroy',
    ]);

//LA RED
Route::get('/lared', 'PaginasController@red')->name('red');

//MISION
Route::get('/mision', 'PaginasController@mision')->name('mision');

//BIBLIOTECA
Route::get('/biblioteca', 'PaginasController@biblioteca')->name('biblioteca');
// Rutas de reportes pdf desde la web
    Route::get('pdf/{id}', ['uses' => 'PaginasController@downloadPdf', 'as' => 'file-pdf']);

//NOTICIAS
Route::get('/noticias', 'PaginasController@noticias')->name('noticias');

//EVENTOS
Route::get('/eventos', 'PaginasController@eventos')->name('eventos');

//CONTACTO
Route::get('/contacto', 'PaginasController@contacto')->name('contacto');
Route::post('enviar-mailcontacto', [
    'uses' => 'PaginasController@enviarmailcontacto',
    'as'   => 'enviarmailcontacto',
]);

//ORGANIZMOS ASOCIADOS
Route::get('/clientes', 'PaginasController@clientes')->name('clientes');

//ORGANIZMOS ASOCIADOS
Route::get('/foros', 'PaginasController@foros')->name('foros');

//BUSCADOR
Route::post('productos/buscar', [
    'uses' => 'PaginasController@buscar',
    'as'   => 'buscar',
]);

/*******************ADMIN************************/
    Route::prefix('adm')->group(function () {


    Route::get('/', 'Adm\AdminController@dashboard')->name('dashboard');

    //DASHBOARD
    Route::get('/dashboard', 'Adm\AdminController@admin');

    /*------------BANNERS----------------*/
    Route::resource('banners', 'Adm\BannersController');

    /*------------DATOS----------------*/
    Route::resource('datos', 'Adm\DatosController');

    /*------------DESTACADOS HOMES----------------*/
    Route::resource('destacadosh', 'Adm\DestacadohomesController');

    /*------------EMPRESAS----------------*/
    Route::resource('empresas', 'Adm\EmpresasController');
    //agregar imagenes de seccion empresas
    Route::post('empresas/{id}/imagen/', 'Adm\EmpresasController@nuevaimagen')->name('nuevaimagenemp'); //es el store de las img de empresa
    Route::delete('imgempresa/{id}/destroy', [
        'uses' => 'Adm\EmpresasController@destroyimg',
        'as'   => 'imgempresa.destroy',
    ]);

    /*------------CLIENTES----------------*/
    Route::resource('clientes', 'Adm\ClientesController');
    Route::delete('clientes/{id}/destroy', [
        'uses' => 'Adm\ClientesController@destroy',
        'as'   => 'clientes.destroy',

    ]);

    /*------------FOROS----------------*/
    Route::resource('foros', 'Adm\ForosController');
    Route::delete('foros/{id}/destroy', [
        'uses' => 'Adm\ForosController@destroy',
        'as'   => 'foros.destroy',

    ]);

    /*------------SLIDERS----------------*/
    Route::resource('sliders', 'Adm\SlidersController');

    /*------------USERS----------------*/
    Route::resource('users', 'Adm\UsersController');

    /*------------METADATOS----------------*/
    Route::resource('metadatos', 'Adm\MetadatosController');

    /*------------Contenido la red----------------*/
    Route::resource('contenido_red', 'Adm\ContenidoRedController'); 

    /*------------Contenido mision----------------*/
    Route::resource('mision', 'Adm\MisionController'); 

    /*------------Contenido biblioteca----------------*/
    Route::resource('biblioteca', 'Adm\BibliotecaController'); 

    /*------------eventos----------------*/
    Route::resource('eventos', 'Adm\EventosController'); 

    /*------------noticias----------------*/
    Route::resource('noticias', 'Adm\NoticiasController'); 

    /*------------CARGOS----------------*/
    Route::resource('cargos', 'Adm\CargosController'); 

    /*------------Referentes----------------*/
    Route::resource('referentes', 'Adm\ReferentesController');
    
});

    //****************************************ZONA PRIVADA**************************************************************************************************************************************************
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
