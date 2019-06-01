<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set and encrypt the password attribute.
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * The relationship to the user's tasks.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Create tasks for week 1.
     */
    public function createWeekOneTasks()
    {
        return $this->tasks()->createMany([
            [
                'title' => 'Create your contact list',
                // @TODO - remove hardcoded group_id
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Obtain Death Certificate',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Select cremation provider',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Plan Memorial Details',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Write Obituary',
                'group_id' => 1,
                'is_complete' => false
            ]
        ]);
    }
}
