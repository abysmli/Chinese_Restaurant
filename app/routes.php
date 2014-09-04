<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/menu1', function()
{
	$itemcategorys = ItemCategory::get();
	$items = Item::get();
	return View::make('menu1')->with('itemcategorys', $itemcategorys)->with('items', $items);
});

Route::get('/menu2', function()
{
	return View::make('menu2');
});

Route::get('/reviews', function()
{
	return View::make('reviews');
});

Route::get('/reviews-single', function()
{
	return View::make('reviews-single');
});

Route::get('/recipes', function()
{
	return View::make('recipes');
});

Route::get('/recipes-single', function()
{
	return View::make('recipes-single');
});






Route::group(array('before' => 'auth.basic'), function()
{
	Route::get('/backend', function()
	{
		return View::make('backend/index')->with('title', 'Backend - Home')->with('page', '0');
	});

	/*------------------------------- ItemCategory --------------------------------*/
	Route::get('/backend/itemcategory', array('uses'=>'ItemCategoryController@getItemCategory'));
	Route::post('/backend/add_itemcategory', array('uses'=>'ItemCategoryController@addItemCategory'));
	Route::post('/backend/update_itemcategory', array('uses'=>'ItemCategoryController@updateItemCategory'));
	Route::post('/backend/remove_itemcategory', array('uses'=>'ItemCategoryController@removeItemCategory'));
	Route::post('/backend/removeall_itemcategory', array('uses'=>'ItemCategoryController@removeAllItemCategory'));

	/*------------------------------- Item --------------------------------*/
	Route::get('/backend/item', array('uses'=>'ItemController@getItem'));
	Route::post('/backend/add_item', array('uses'=>'ItemController@addItem'));
	Route::post('/backend/update_item', array('uses'=>'ItemController@updateItem'));
	Route::post('/backend/remove_item', array('uses'=>'ItemController@removeItem'));
	Route::post('/backend/removeall_item', array('uses'=>'ItemController@removeAllItem'));

	/*------------------------------- Meta --------------------------------*/
	Route::get('/backend/meta', array('uses'=>'MetaController@getMeta'));
	Route::post('/backend/add_meta', array('uses'=>'MetaController@addMeta'));
	Route::post('/backend/update_meta', array('uses'=>'MetaController@updateMeta'));
	Route::post('/backend/remove_meta', array('uses'=>'MetaController@removeMeta'));
	Route::post('/backend/removeall_meta', array('uses'=>'MetaController@removeAllMeta'));
});

