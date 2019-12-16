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
 * Route: Relateds
Route::get('novidade/{slug}/{segment}', 'Web\ClawsDetailsController@index')->name('details-claws');
Route::post('novidade/{slug}/{segment}', 'Web\ClawsDetailsController@form')->name('claws-form');
*/

