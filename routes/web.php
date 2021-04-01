<?php
use App\Http\Controllers\Admin\CommandsController;
use Illuminate\Support\Facades\Route;
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


Route::get('/','TestController@index');


Route::middleware(['admin'])->prefix('admin')->namespace('Admin')->group(function () {
    //Productos
    Route::get('/products', 'ProductController@index')->name('index');//listado
    Route::get('/products/create','ProductController@create');//crear productos
    Route::post('/products/','ProductController@store');//guardar productos
    Route::get('/products/{product}/edit','ProductController@edit');//edit productos
    Route::post('/products/{product}/edit','ProductController@update');//edit productos
    Route::delete('/products/{product}','ProductController@destroy');//form eliminar

    //Categorias
    Route::get('/categories', 'CategoryController@index')->name('index');//listado
    Route::get('/categories/create','CategoryController@create');//crear productos
    Route::post('/categories/','CategoryController@store');//guardar productos
    Route::get('/categories/{category}/edit','CategoryController@edit');//edit productos
    Route::post('/categories/{category}/edit','CategoryController@update');//edit productos
    Route::delete('/categories/{category}','CategoryController@destroy');//form eliminar

    //Usuarios
    Route::get('/users','UserController@index')->name('index');
    Route::get('/users/create','UserController@create')->name('create');
    Route::post('users','UserController@store')->name('save');
    Route::get('/users/{id}/edit','UserController@edit');//edit productos
    Route::post('/users/{id}/edit','UserController@update');//edit productos
    Route::delete('/users/{id}','UserController@destroy');//form eliminar

    //Mesas
    Route::get('/boards','BoardController@index')->name('index');
    Route::get('/boards/create','BoardController@create');
    Route::post('/boards','BoardController@store');
    Route::get('/boards/{id}/edit','BoardController@edit');
    Route::post('/boards/{id}/edit','BoardController@update');
    Route::delete('/boards/{id}','BoardController@destroy');
    Route::get('/boards/{board}/do','BoardController@occupy');
    Route::post('/boards/{board}/undo','BoardController@setfree');

//    Commands
    Route::resource('command', 'CommandsController');
//    Route::post('command/{commanda}', 'CommandsController@store')->name('command.store');
    Route::post('/command/','CommandsController@store');
    Route::get('/command/{id}/order','CommandsController@order')->name('command.order');
    Route::post('/commando/','CommandsController@payboard')->name('command.payboard');


//    Route::get('/command/{command}','CommandsController@show');
    Route::get('command/{id}/dataproduct','CommandsController@dataproduct')->name('command.datap');
    Route::post('command/update', 'CommandsController@update')->name('command.update');

    Route::get('command/destroy/{id}', 'CommandsController@destroy');
    Route::get('/{id}/pdf','CommandsController@pdf');

    //

//    Route::resource('ajaxboards','BoardAjaxController');


    //Ahorros
    Route::get('/savings','SavingsController@index')->name('index');
    Route::get('/savings/create','SavingsController@create');
    Route::post('/savings','savingsController@store');
    Route::get('/savings/{id}/edit','SavingsController@edit');
    Route::post('/savings/{id}/edit','SavingsController@update');
    Route::delete('/savings/{id}','SavingsController@destroy');

    //Caja registradora
    Route::get('/tills','TillController@index')->name('index');
    Route::get('/tills/create','TillController@create');
    Route::post('/tills','TillController@store');
    Route::get('/tills/{id}/edit','TillController@edit');
    Route::post('/tills/{id}/edit','TillController@update');
    Route::delete('/tills/{id}','TillController@destroy');

//    imagenes
    Route::get('/products/{id}/images','ImagesController@index');
    Route::post('/products/{id}/images','ImagesController@store');
    Route::delete('/products/{id}/images','ImagesController@destroy');
    Route::get('/products/{id}/images/select/{images}','ImagesController@select');




});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products/{id}','ProductController@show');
Route::get('/categories/{category}','CategoryController@show');
Route::post('/cart','CartDetailController@store');
Route::delete('/cart','CartDetailController@destroy');
Route::post('/order','CartController@update');


