<?php

namespace App\Services;

class ProvidedTasks
{
    /**
     * Provided task config
     * @TODO - Consider adding this to a new config file
     *
     * @var array
     */
    protected $providedTasks = [
        'day_one' => [
            [
                'title' => 'Day 1 Task [0]',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Day 1 Task [1]',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Day 1 Task [2]',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Day 1 Task [3]',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Day 1 Task [4]',
                'group_id' => 1,
                'is_complete' => false
            ]
        ],
        'week_one' => [
            [
                'title' => 'Week 1 Task [1]',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Week 1 Task [2]',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Week 1 Task [3]',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Week 1 Task [4]',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Week 1 Task [5]',
                'group_id' => 2,
                'is_complete' => false
            ]
        ],
        'month_one' => [
            [
                'title' => 'Month 1 Task [1]',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Month 1 Task [2]',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Month 1 Task [3]',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Month 1 Task [4]',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Month 1 Task [5]',
                'group_id' => 3,
                'is_complete' => false
            ]
        ],
        'year_one' => [
            [
                'title' => 'Year 1 Task [1]',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Year 1 Task [2]',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Year 1 Task [3]',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Year 1 Task [4]',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Year 1 Task [5]',
                'group_id' => 4,
                'is_complete' => false
            ]
        ]
    ];

    /**
     * Get Provided Tasks
     *
     * @return Array
     */
    public function getProvidedTasks()
    {
        return $this->providedTasks;
    }

    /**
     * Set Provided Tasks
     *
     * @param App\Models\User $user
     * @return Array
     */
    public function setProvidedTasks($user)
    {
        foreach($this->providedTasks as $taskGroup) {
            $user->tasks()->createMany($taskGroup);
        }
    }

}
