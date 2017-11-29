<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| post, get, put , delete
*/

Route::get('/', function () {
    return view('index');
});
 
Auth::routes();



Route::get('/agregarEvento', 'EventBenefitController@index')->name('agregarEvento');

Route::get('/centroAcopio', 'CollectionCenterController@index2')->name('centroAcopio');

Route::get('/catastrophe', 'CatastropheController@index')->name('catastrophe');

Route::get('/agregarVol', 'MeasureVolunteerController@index')->name('agregarVol');

Route::get('/agregarDonaciones', 'MoneyDonationController@create')->name('crearDonacion');

route::get ('privinces/{id}','CatastropheController@getProvinces');
Route::POST('/detalles', 'CatastropheController@index_detalle')->name('detalles');
Route::POST('/centroAcopio','CollectionCenterController@agregar')->name('addC');
Route::POST('/agregarVol','VolunteerController@agregar')->name('addV');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');
Route::post('update_perfil', 'HomeController@updatePerfil');
Route::get('/password_reset', 'Auth\ResetPasswordController@viewUpdatePassword')->name('password_reset');
Route::post('password_reset', 'Auth\ResetPasswordController@updatePassword');


Route::post('new_catastrophe','CatastropheController@new_catastrophe')->name('create_c');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('bank', 'BankController');
Route::resource('catastrophe', 'CatastropheController');
Route::resource('catastropheLocation', 'CatastropheLocationController');
//----------------------------------------------------------------------------

Route::resource('collectionCenter', 'CollectionCenterController');
Route::resource('collectionCenterHistory', 'CollectionCenterHistoryController');
Route::get('/Donar_Bienes','CollectionCenterController@index')->name('Donar_Bienes');

//---------------------------------------------------------------------------------

Route::resource('eventBenefit', 'EventBenefitController');
Route::resource('eventBenefitHistory', 'EventBenefitHistoryController');
Route::get('/Evento_Beneficio','EventBenefitController@index')->name('Evento_Beneficio');

//---------------------------------------------------------------------------------
Route::resource('measure', 'MeasureController');
Route::resource('measureVolunteers', 'MeasureVolunteersController');

//---------------------------------------------------------------------------------
Route::resource('moneyDonationHistory', 'MoneyDonationHistoryController');
Route::resource('moneyDonation', 'MoneyDonationController'); 
route::get('/Donar_Dinero', 'MoneyDonationController@catastrophe_index')->name('Donar_Dinero'); 
Route::get('/Donar_Dinero_Para_Catastrofe/{id}', ['as' => 'Donar_Dinero_Para_Catastrofe', 'uses' => 'MoneyDonationController@donate_request_index']);


//---------------------------------------------------------------------------------
Route::resource('volunteer', 'VolunteerController');
Route::get('/Voluntariado','VolunteerController@index')->name('Voluntariado');
//---------------------------------------------------------------------------------


Route::resource('role', 'RoleController');
Route::resource('typeCatastrophe', 'TypeCatastropheController');
Route::resource('userHistory', 'UserHistoryController');
Route::resource('commentary', 'CommentaryController');
Route::resource('volunteerHistory', 'VolunteerHistoryController'); 

//Route::get('password/email','Auth\PasswordController@getEmail');
//Route::post('password/email','Auth\PasswordController@postEmail');
 