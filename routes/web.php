<?php

use Illuminate\Support\Facades\Route;
use App\PostCardSendingService;
use App\Postcard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/postcards',function(){
   $postcardService = new PostCardSendingService('us',4,6);
    $postcardService->hello('Hello From test','test@gmail.com');
});

Route::get('/facades', function(){

    Postcard::hello(' Hello From Facade','abc@gmail.com');

});
