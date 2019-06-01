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
        'immediately' => [
            [
                'title' => 'Contact authorities',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Contact immediate loved ones',
                'group_id' => 1,
                'is_complete' => false
            ],
            [
                'title' => 'Create a phone tree',
                'group_id' => 1,
                'is_complete' => false
            ]
        ],
        '24_hours' => [
            [
                'title' => 'Set up dependent care and pet care',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Secure home of deceased',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Locate important documents',
                'group_id' => 2,
                'is_complete' => false
            ],
            [
                'title' => 'Contact the deceased\'s employer',
                'group_id' => 2,
                'is_complete' => false
            ]
        ],
        '48_hours' => [
            [
                'title' => 'Create list of relatives and friends to include in an obituary',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Gather information needed for death certificate',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Inform friends and family of service information',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Write obituary',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Determine how many death certificates you need',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Determine flowers/donation policy',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Notify Social Security',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Notify Office of Personnel Management (if a federal employee)',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Freeze credit cards',
                'group_id' => 3,
                'is_complete' => false
            ],
            [
                'title' => 'Arrange for the disposal of any perishables left in the deceased’s home- such as food, refrigerated items, and existing refuse.',
                'group_id' => 3,
                'is_complete' => false
            ]
        ],
        'within_week' => [
            [
                'title' => 'Contact landlord (if applicable)',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Notify religious, fraternal, and civic organizations that your loved one was a member of.',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Setup mail forwarding/ notify post office',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Pay off and close credit cards',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Pay off and terminate mortgage',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Notify religious, fraternal, and civic organizations that your loved one was a member of.',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Setup mail forwarding/ notify post office',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Pay off and close credit cards',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Pay off and terminate mortgage',
                'group_id' => 4,
                'is_complete' => false
            ],
            // @TODO - content question - is this assuming the users' financial ability?
            [
                'title' => 'Pay off and close credit cards',
                'group_id' => 4,
                'is_complete' => false
            ],
            // @TODO - content question - is this assuming the users' financial ability
            [
                'title' => 'Contact a tax preparer to file a final return for the individual and his/her estate.',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Retrieve death certificate',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Access/Cancel accounts',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Notify Medicare',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'File Life Insurance claim',
                'group_id' => 4,
                'is_complete' => false
            ],
            [
                'title' => 'Closing of a Business',
                'group_id' => 4,
                'is_complete' => false
            ]
        ],
        'within_month' => [
            [
                'title' => 'Adjust your own estate plans and beneficiary designations',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Meet with an accountant to discuss estate taxes',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                // @TODO - there is way more title content for the tasks that should be broken into the task body content when that is available.
                'title' => 'Contact the Social Security Administration and other government offices that may have been making payments to the decedent.',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Notify the Registrar of Voters',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'If the deceased’s home is unoccupied, cancel unnecessary home services, such as newspaper delivery, cable service, etc.',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Cancel deceased’s prescriptions',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Contact the Department of Motor Vehicles to cancel deceased’s drivers license and transfer titles of all registered vehicles',
                'group_id' => 5,
                'is_complete' => false
            ],
            // @TODO - Should this happen earlier??
            [
                'title' => 'Contact the deceased’s employer. ',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Notify all 3 credit reporting agencies and obtain a current copy of the deceased’s credit report',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'If the death was accidental, verify whether benefits are available on existing insurance policies',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Check for any life insurance benefits available through existing credit card or loan accounts',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'File any outstanding claims for health insurance or Medicare',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Obtain copies of deceased’s outstanding bills',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Make a list of outstanding debts',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Make list of what\'s owed to deceased',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Locate and/or obtain other important paperwork necessary for the settlement of their estate',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Advise all creditors in writing that a death has occurred',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Change ownership of assets and lines of credit',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Update beneficiaries on your life insurance policies, if necessary',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Organize and distribute decedent\'s personal belongings',
                'group_id' => 5,
                'is_complete' => false
            ],
            [
                'title' => 'Remove loved one\'s from marketing and mailing lists.',
                'group_id' => 5,
                'is_complete' => false
            ]
        ],
        'other' => [
            [
                'title' => 'Thank you notes to those particularly supportive of you through this process',
                'group_id' => 6,
                'is_complete' => false
            ],
            [
                'title' => 'Seeking therapy or local grief support groups',
                'group_id' => 6,
                'is_complete' => false
            ],
            [
                'title' => 'Diving into a good book or other helpful online resources',
                'group_id' => 6,
                'is_complete' => false
            ],
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
        foreach ($this->providedTasks as $taskGroup) {
            $user->tasks()->createMany($taskGroup);
        }
    }
}
