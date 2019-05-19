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
        $groups = ['day one', 'week one', 'month one', 'year one'];
        foreach ($groups as $group) {
            factory(TaskGroup::class)->create([
                'title' => $group
            ]);
        }
    }
}
