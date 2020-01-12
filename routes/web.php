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


Auth::routes();

/**
 * Route: Stores
 */
Route::get('loja/{slug}', 'Web\StoreController@index')->name('store');


Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('sobre-nos', 'Web\AboutUsController@index')->name('about-us');
Route::get('contato', 'Web\ContactController@index')->name('contact');
Route::get('planos', 'Web\PlansController@index')->name('plans');

Route::get('whatsapp', 'Web\WhatsappController@index')->name('whatsapp');

/**
 * Route: Claws
 */
Route::get('dicas/{slug}/{segment}', 'Web\ClawsDetailsController@index')->name('details-claws');
Route::post('dicas/{slug}/{segment}', 'Web\ClawsDetailsController@form')->name('claws-form');

/**
 * Route: Products Details
 */
Route::get('produto/{slug}/{segment}', 'Web\RelatedDetailsController@index')->name('details-related');
Route::post('produto/{slug}/{segment}', 'Web\RelatedDetailsController@form')->name('details-related-form');

/**
 * Route: Shopping Details
 */
Route::get('shopping/{slug}/{store}/atacado/{segment}', 'Web\ShoppingDetailsController@index')->name('details-shopping');

/**
 * Route: City Details
 */
Route::get('fabricas/{slug}', 'Web\CityDetailsController@index')->name('details-city');
Route::get('fabricas/{slug}/{store}', 'Web\CityDetailsController@store')->name('details-city-store');
