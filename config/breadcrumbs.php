<?php

return [
    'dashboard' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
    ],

    'tasks.index' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks'],
    ],

    'tasks.create' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks', 'route' => 'tasks.index'],
        ['label' => 'Create'],
    ],

    'tasks.edit' => [
        ['label' => 'Dashboard', 'route' => 'dashboard'],
        ['label' => 'Tasks', 'route' => 'tasks.index'],
        ['label' => 'Edit'],
    ],
];
