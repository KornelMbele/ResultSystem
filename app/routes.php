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
	return View::make('hello');
});
Route::get('home',array(
    'as'=>'home','uses'=>'HomeController@home'
    ));
//inserting   and posting students information
Route::get('StudentReg','StudentFormController@StdReg');
Route::post('sendStd','StudentPostController@send');

//inserting   and posting marks
Route::get('marks','MarksFillController@marks');
Route::post('sendMarks','MarksPostController@sendMarks');
//inserting and posting users information
Route::get('SignUp',array(
    'as'=>'SignUp','uses'=>'UsersController@UserSignUp',
    'before'=>'auth'
));
Route::post('SignUp','UsersController@Users');
//report view route
Route::get('Report',array(
    'as'=>'Report',
    'uses'=>'StudentReportController@Report',
'before'=>'auth'));
//seaech results
Route::get('search1',array(
    'as'=>'search1',
    'uses'=>'SearchResultController@search',
     'before'=>'auth'));
//user login
Route::post('login',array(
    'as'=>'login', 'uses'=>'UserLoginController@login'));
Route::get('logout','UserLoginController@logout');
//results display
Route::get('results',array(
    'as'=>'results',
    'uses'=>'ResultsController@results',
    'before'=>'auth'
));
Route::get('delete/{id}','DeleteResultsController@delete');
//userlist controller
Route::get('userlist','UserListController@userlist');
Route::get('userdelete/{id}','UserListController@userdelete');
Route::get('Cpanel',array(
    'as'=>'Cpanel',
    'uses'=>'CpanelController@cpanel',
    'before'=>'auth'
));
Route::get('index','IndexController@index');
Route::get('mail','MailController@mails');
Route::post('mail','MailController@mail');
Route::get('delete1/{id}','MailController@delete1');
Route::get('edit/{id}','UserListController@edit');
Route::post('update','UserListController@update');
Route::get('read/{id}','MailViewController@read');


