<?php

return [
    'role_structure' => [
        'superadmin' => [
            'acl' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'profiles' => 'c,r,u,d',
            'organisations' => 'c,r,u,d',
            'missions' => 'c,r,u,d',
            'langues' => 'c,r,u,d',
        ],
        'MDPAdmin' => [
            'users' => 'c,r,u,d',
            'profiles' => 'c,r,u,d',
            'organisations' => 'c,r,u,d',
            'missions' => 'c,r,u,d',
            'langues' => 'c,r,u,d',
        ],
        'MDPGuestAdmin' => [
            'users' => 'r',
            'profiles' => 'r'
        ],
        // 'ClientAdmin' => [
        //   'users' => 'c,r,u,d',
        //   'profile' => 'c,r,u,d'
        // ],
      //   'commanditaireAdmin' => [
      //     'users' => 'c,r,u,d',
      //     'profiles' => 'c,r,u,d'
      // ],
        'commanditaire' => [
            'profiles' => 'r,u',
            'missions' => 'c,r,u',
        ],
        'interprete' => [
            'profiles' => 'r,u',
            'missions' => 'r,u',
        ],
        'user' => [
          'users' => 'r',
          'profiles' => 'r',
          'organisations' => 'r',
          'missions' => 'r',
          'langues' => 'r',
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
