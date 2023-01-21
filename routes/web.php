<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\UserController;

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

// --------------------------------------Main page
Route::get('/', [ListingController::class, 'index']);

// --------------------------------------Listings

// Show create Form view
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Post new job ad data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show editing view
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// post edits - update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// shows a single listing, should be last since it takes input
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// -------------------------------------Users

// show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// log in the user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');


// edit user info
Route::get('/users/edit', [UserController::class, 'edit'])->middleware('auth');
// save user info edit
Route::put('/users', [UserController::class, 'update'])->middleware('auth');


// logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

/* -----------------------------------------learning 
Route::get('/', function() {
    $listings = Listing::all();
    return view('listings', [
        'listings' => $listings
    ]);
});

Route::get('/listings/{id}', function($id) {
    $listing = Listing::find($id);

    if($listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    } else {
        abort('404');
    }

    
});

Route::get('/howdy', function() {
    return response('<strong>Howdy there!</strong>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('Wild-header', 'no');
});

Route::get('/posts/{id}', function($id) {
    ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});

*/