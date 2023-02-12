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

function listMenus(array $menus, int $parents = 0): void
{
    if (!empty($menus)) {
        echo empty($parents) ? "<ul class='menuuuuu'>" : "<ul>";
        foreach ($menus as $index => $menu) {
            if ($menu['parent'] === $parents) {
                echo "<li>" . "<a href=" . $menu['link'] . ">" . $menu['name'] . "</a>";
                unset($menus[$index]);
                listMenus($menus, $menu['id']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }
}

listMenus($arr);
