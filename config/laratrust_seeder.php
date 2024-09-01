<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Patient' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'Doctor' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'Admin' => [
            'profile' => 'r,u',
        ],
        'Lab' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'Chemist' => [
            'module_1_name' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
