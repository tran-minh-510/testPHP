<?php

// $arr = [
//     [
//         'id' => 1,
//         'name' => 'JavaScript',
//         'link' => '#javascript',
//         'children' => [
//             [
//                 'id' => 2,
//                 'name' => 'ReactJS',
//                 'link' => '#reactjs',
//                 'children' => [
//                     [
//                         'id' => 5,
//                         'name' => 'NextJS',
//                         'link' => '#nextjs'
//                     ]
//                 ]
//             ],
//             [
//                 'id' => 3,
//                 'name' => 'NodeJS',
//                 'link' => '#nodejs',
//                 'children' => [
//                     [
//                         'id' => 6,
//                         'name' => 'ExpressJS',
//                         'link' => '#expressjs'
//                     ],
//                     [
//                         'id' => 7,
//                         'name' => 'NuxtJS',
//                         'link' => '#nuxtjs'
//                     ]
//                 ]
//             ],
//             [
//                 'id' => 4,
//                 'name' => 'VueJS',
//                 'link' => '#vuejs'
//             ],
//         ]
//     ],
//     [
//         'id' => 8,
//         'name' => 'PHP',
//         'link' => '#php',
//         'children' => [
//             [
//                 'id' => 9,
//                 'name' => 'Laravel',
//                 'link' => '#laravel'
//             ],
//             [
//                 'id' => 10,
//                 'name' => 'CakePHP',
//                 'link' => '#cakephp'
//             ]
//         ]
//     ]
// ];

$menus = [
    [
        'id' => 12,
        'title' => 'Sản phẩm 1.3',
        'link' => '#',
        'parent' => 6
    ],
    [
        'id' => 1,
        'title' => 'Trang chủ',
        'link' => '#',
        'parent' => 0
    ],

    [
        'id' => 2,
        'title' => 'Giới thiệu',
        'link' => '#',
        'parent' => 0
    ],

    [
        'id' => 3,
        'title' => 'Sản phẩm',
        'link' => '#',
        'parent' => 0,

    ],

    [
        'id' => 4,
        'title' => 'Tin tức',
        'link' => '#',
        'parent' => 0
    ],

    [
        'id' => 5,
        'title' => 'Liên hệ',
        'link' => '#',
        'parent' => 0
    ],

    [
        'id' => 6,
        'title' => 'Sản phẩm 1',
        'link' => '#',
        'parent' => 3
    ],

    [
        'id' => 7,
        'title' => 'Sản phẩm 2',
        'link' => '#',
        'parent' => 3
    ],

    [
        'id' => 8,
        'title' => 'Sản phẩm 3',
        'link' => '#',
        'parent' => 3
    ],

    [
        'id' => 9,
        'title' => 'Sản phẩm 4',
        'link' => '#',
        'parent' => 3
    ],

    [
        'id' => 10,
        'title' => 'Sản phẩm 1.1',
        'link' => '#',
        'parent' => 6
    ],

    [
        'id' => 11,
        'title' => 'Sản phẩm 1.2',
        'link' => '#',
        'parent' => 6
    ]
];

function buildNested(array $menus, int $parent = 0, $result = [])
{
    if (!empty($menus)) {
        foreach ($menus as $key => $menu) {
            if ($menu['parent'] == $parent) {
                $result[$key] = $menu;
                buildNested($menus, $menu['id'], $result[$key]['children']);
                if (empty($result[$key]['children'])) {
                    unset($result[$key]['children']);
                }
                $result = array_values($result);

                unset($menus[$key]);
            }
        }
    }

    return $result;
}

$nested = buildNested($menus);
echo '<pre>';
print_r($nested);
echo '</pre>';
