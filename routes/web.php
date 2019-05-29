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
// @TODO - Why is this here? Can we remove this package and then this code?
// use JavaScript;
// use App\Models\User;
// Route::get('/', function () {
//     JavaScript::put([
//         'foo' => 'bar',
//         'user' => User::first(),
//         'age' => 29
//     ]);

//     return view('welcome');
// });

Route::get('/', 'LandingController@index');

Route::get('dashboard', function () {
    return view('dashboard', [
        'userId' => Auth::user() ? Auth::user()->id : null,
        'name' => Auth::user() ? Auth::user()->name : null,
    ]);
})->middleware('auth');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', 'TaskController', [
        'only' => [
            'index', 'store', 'update'
        ]
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'FAQController@index')->name('faq');
