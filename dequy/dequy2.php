<?php

$arr = [
    [
        'id' => 1,
        'name' => 'JavaScript',
        'link' => '#javascript',
        'parent' => 0
    ],
    [
        'id' => 2,
        'name' => 'ReactJS',
        'link' => '#reactjs',
        'parent' => 1
    ],
    [
        'id' => 3,
        'name' => 'NodeJS',
        'link' => '#nodejs',
        'parent' => 1
    ],
    [
        'id' => 4,
        'name' => 'VueJS',
        'link' => '#vuejs',
        'parent' => 1
    ],
    [
        'id' => 5,
        'name' => 'NextJS',
        'link' => '#nextjs',
        'parent' => 2
    ],
    [
        'id' => 6,
        'name' => 'ExpressJS',
        'link' => '#expressjs',
        'parent' => 3
    ],
    [
        'id' => 7,
        'name' => 'NuxtJS',
        'link' => '#nuxtjs',
        'parent' => 3
    ],
    [
        'id' => 8,
        'name' => 'PHP',
        'link' => '#php',
        'parent' => 0
    ],
    [
        'id' => 9,
        'name' => 'Laravel',
        'link' => '#laravel',
        'parent' => 8
    ],
    [
        'id' => 10,
        'name' => 'CakePHP',
        'link' => '#cakephp',
        'parent' => 8
    ]
];

function buildNest(array $menus, int $parents = 0, $arr = [])
{
    if (!empty($menus)) {
        foreach ($menus as $index => $menu) {
            if ($menu['parent'] === $parents) {
                $arr[$index] = $menu;
                unset($menus[$index]);
                $arr[$index]['children'] = buildNest($menus, $menu['id']);
                if (empty($arr[$index]['children'])) {
                    unset($arr[$index]['children']);
                };
                $arr = array_values($arr);
            }
        }
        return $arr;
    }
}

print_r(buildNest($arr));
