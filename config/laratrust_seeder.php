<?php

return [
    'role_structure' => [
        'superadmin' => [
            'acl' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'profile' => 'c,r,u,d'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'c,r,u,d'
        ],
        'MDPGuestAdmin' => [
            'users' => 'r',
            'profile' => 'r'
        ],
        // 'ClientAdmin' => [
        //   'users' => 'c,r,u,d',
        //   'profile' => 'c,r,u,d'
        // ],
        'client' => [
            'profile' => 'c,r,u'
        ],
        'interprete' => [
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r'
        ],
    ],
    // 'permission_structure' => [
    //     'cru_user' => [
    //         'profile' => 'c,r,u'
    //     ],
    // ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
