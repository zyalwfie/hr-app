<?php

return [
    'dashboard' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
    ],

    'tasks_index' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks'],
    ],

    'tasks_create' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks', 'route' => 'tasks.index'],
        ['label' => 'Create'],
    ],

    'tasks_edit' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks', 'route' => 'tasks.index'],
        ['label' => 'Edit'],
    ],

    'tasks_show' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks', 'route' => 'tasks.index'],
        ['label' => 'Create']
    ]
];
