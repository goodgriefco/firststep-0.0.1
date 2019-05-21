<?php

namespace App\Http\Controllers\Auth;

use Str;
use App\Models\Task;
use App\Models\TaskGroup;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'api_token' => Str::random(60),
        ]);

        $taskGroups = TaskGroup::all();

        foreach ($taskGroups as $group) {
            $user->tasks()->createMany([
                [
                    'title' => 'Create your contact list',
                    'group_id' => $group->id,
                    'is_complete' => false
                ],
                [
                    'title' => 'Obtain Death Certificate',
                    'group_id' => $group->id,
                    'is_complete' => false
                ],
                [
                    'title' => 'Select cremation provider',
                    'group_id' => $group->id,
                    'is_complete' => false
                ],
                [
                    'title' => 'Plan Memorial Details',
                    'group_id' => $group->id,
                    'is_complete' => false
                ],
                [
                    'title' => 'Write Obituary',
                    'group_id' => $group->id,
                    'is_complete' => false
                ]
            ]);
        }

        return $user;
    }
}
