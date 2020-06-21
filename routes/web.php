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
*/

Route::get('/','subcontroll@say');
Route::post('/post-route','subcontroll@loginProcess');

Route::get('created','createdcontroller@create_perform');
Route::post('created','createdcontroller@create_insert');

Route::get('message','comment@comment_perform');

Route::get('insertmessage','insert_comment@insert_perform');
Route::post('insertmessage','insert_comment@insert_comment');

Route::get('profile','profilecontroller@profile_perform');