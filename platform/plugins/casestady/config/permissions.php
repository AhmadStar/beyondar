<?php

return [
    [
        'name' => 'Case studies',
        'flag' => 'casestudy.index',
    ],
    [
        'name' => 'Create',
        'flag' => 'casestudy.create',
        'parent_flag' => 'casestudy.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'casestudy.edit',
        'parent_flag' => 'casestudy.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'casestudy.destroy',
        'parent_flag' => 'casestudy.index',
    ],
];
