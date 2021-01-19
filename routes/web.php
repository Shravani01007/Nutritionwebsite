<?php

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});*/
Route::get('/', 'UsersController@index');
Route::get('/about', 'UsersController@about');
Route::get('/naturopathy', 'UsersController@naturo');
Route::get('/homeopathy', 'UsersController@homeo');
Route::get('/generalinfo', 'UsersController@general');
Route::get('/contact', 'UsersController@contact');
Route::get('/successstories', 'UsersController@success');
Route::get('/homeremedies', 'UsersController@homerem');
Route::put('/suggestionadded', 'UsersController@suggestionadded');
Route::post('/usersearch', 'UsersController@search');
Route::get('/fruitview/{id}', 'UsersController@fruitview');
Route::post('/add_to_cart', 'UsersController@addToCart');
Route::get('/cartlist', 'UsersController@cartlist');
Route::get('/removecart/{id}', 'UsersController@removecart');
Route::get('/ordernow', 'UsersController@ordernow');
Route::post('/orderplace', 'UsersController@orderplace');
Route::get('/myorders', 'UsersController@myorders');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    //user
    Route::get('/role-register', 'Admin\DashboardController@registered');
    //fruit
    Route::get('/addfruit', 'Admin\DashboardController@addfruit');
    Route::post('/fruitadded', 'Admin\DashboardController@fruitadded');
    Route::get('/fruitdatabase', 'Admin\DashboardController@fruitdb');
    Route::get('/orderdatabase', 'Admin\DashboardController@ordersdb');
    Route::get('/fruitedit/{id}', 'Admin\DashboardController@fruitedit');
    Route::get('/orderedit/{id}', 'Admin\DashboardController@orderedit');
    Route::put('/fruitupdate/{id}', 'Admin\DashboardController@fruitupdate');
    Route::put('/orderupdate/{id}', 'Admin\DashboardController@orderupdate');
    Route::delete('/fruitdelete/{id}','Admin\DashboardController@fruitdelete');
    Route::delete('/orderdelete/{id}','Admin\DashboardController@orderdelete');
    //suggestion
    Route::get('/suggestiondatabase', 'Admin\DashboardController@sugdb');
    Route::delete('/suggestiondelete/{id}','Admin\DashboardController@sugdelete');
    Route::post('/search', 'Admin\DashboardController@search');
    Route::get('/search', 'Admin\DashboardController@search');
    //remedy
    Route::get('/addremedy', 'Admin\DashboardController@addremedy');
    Route::post('/remedyadded', 'Admin\DashboardController@remedyadded');
    Route::get('/remedydatabase', 'Admin\DashboardController@remedydb');
    Route::get('/remedyedit/{id}', 'Admin\DashboardController@remedyedit');
    Route::put('/remedyupdate/{id}', 'Admin\DashboardController@remedyupdate');
    Route::delete('/remedydelete/{id}','Admin\DashboardController@remedydelete');
}); 