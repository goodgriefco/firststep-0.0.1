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
        $groups = [
            [
                'group_key' => 'immediately',
                'title' => 'Immediately'
            ],
            [
                'group_key' => '24_hours',
                'title' => 'Within 24 Hours'
            ],
            [
                'group_key' => '48_hours',
                'title' => 'Within 48 Hours'
            ],
            [
                'group_key' => 'other',
                'title' => 'Other things to consider'
            ],
        ];

        foreach ($groups as $group) {
            factory(TaskGroup::class)->create($group);
        }
    }
}
