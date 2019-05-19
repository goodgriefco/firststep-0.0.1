<?php

use App\Models\TaskGroup;
use Illuminate\Database\Seeder;

class TaskGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TaskGroup::class, 5)->create();
    }
}
