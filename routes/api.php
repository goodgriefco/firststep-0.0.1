<?php

use App\Models\User;
use App\Models\Task;
use App\Models\IntakeResponse;
use App\Models\TaskGroup;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Log;
// use App\Services\Typeform;

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
        ->orderByDesc('created_at')
        ->get();

    return $tasks->toJson();
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
        'group_id' => $request->input('groupId'),
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

Route::get('/taskgroup/{id}', function ($id) {
    $taskGroup = TaskGroup::findOrFail($id);

    return response()->json([
        'message' => 'success',
        'task_group' => $taskGroup->toArray()
    ]);
});

Route::post('/webhook', function (Request $request) {
    Log::info($request);
    // $formId = $request['form_response']['form_id'];

    // @TODO - What assumptions are we making about user id here? is it ever possible that
    // user_id could point to another user? Could it be null?
    $response = IntakeResponse::create([
        'user_id' => (int) $request['form_response']['hidden']['user'],
        'event_id' => $request['event_id'],
        'form_id' => $request['form_response']['form_id'],
        'submitted_at' => new Carbon($request['form_response']['submitted_at']),
        'fields' => json_encode($request['form_response']['definition']['fields']),
        'answers' => json_encode($request['form_response']['answers'])
    ]);

    Log::info($response);
    // @TODO - Create tasks based on responses.

    return response()->json([
        'message' => 'success',
    ]);
});

// Route::middleware(['auth:api'])->group(function() {
//     Route::get('/user', function(Request $request) {
//         dd(auth()->user());
//         return $request->user();
//     });
// });
