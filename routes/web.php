<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

/*
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
*/


/* learning 
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