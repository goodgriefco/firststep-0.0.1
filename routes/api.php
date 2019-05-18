<?php

use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/{id}/tasks', function ($id) {
    $user = User::find($id);

    $tasks = $user
        ->tasks()
        ->orderBy('is_complete')
        ->orderByDesc('created_at')
        ->get();

    return $tasks;
});


// Route::middleware(['auth:api'])->group(function() {
//     Route::get('/user', function(Request $request) {
//         dd(auth()->user());
//         return $request->user();
//     });
// });
