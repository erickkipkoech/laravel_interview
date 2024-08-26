<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Project
//all listings by route
/*Route::get('/', function () {
    return view('listings',
[
'listings'=>Listing::all()
]);
});*/

//Single Listing by route
/*Route::get('/listing/{listing}',function(Listing $listing){
    return view('listing',
    ['listing'=>$listing]);

});*/

//All listings through a controller
Route::get('/',[PostController::class,'index']);

//show register form
Route::get('/home',[PostController::class,'get_posts_view']);




