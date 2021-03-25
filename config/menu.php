<?php
return[
    [
        'label' =>'Dashboard',
        'route' => 'admin.dashboard',
        'icon' =>'fas fa-home'
    ],
    [
        'label' =>'File Manager',
        'route' => 'admin.file',
        'icon' =>'far fa-images'
    ],
    [
        'label' =>'Product',
        'route' => 'products.index',
        'icon' =>'far fa-folder-open',
        'items' =>[
            [
                'label' =>'List Product',
                'route' => 'products.index',
            ],
            [
                'label' =>'Add Product',
                'route' => 'products.create',
            ]
        ]
    ]
];

