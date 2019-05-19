<?php

use App\Models\User;
use App\Models\Task;
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

Route::post('/user/{id}/tasks', function (Request $request, $id) {
    // validate the given request
    // $data = $this->validate($request, [
    //     'title' => 'required|string|max:255',
    // ]);
    $user = User::find($id);

    // create a new incomplete task with the given title
    $task = $user->tasks()->create([
        'title' => $request->input('title'),
        'is_complete' => false,
    ]);

    return response()->json([
        'message' => 'success',
        'task' => $task->toArray()
    ]);
});

Route::post('/task/{id}/complete', function (Request $request, $id) {
    $task = Task::findOrFail($id);

    $task->toggleComplete()->save();

    return response()->json([
        'message' => 'success',
        'task' => $task->toArray()
    ]);
});

// Route::middleware(['auth:api'])->group(function() {
//     Route::get('/user', function(Request $request) {
//         dd(auth()->user());
//         return $request->user();
//     });
// });
