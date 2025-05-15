<?php

return [
    [
        'name' => 'Casestudy2s',
        'flag' => 'casestudy2.index',
    ],
    [
        'name' => 'Create',
        'flag' => 'casestudy2.create',
        'parent_flag' => 'casestudy2.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'casestudy2.edit',
        'parent_flag' => 'casestudy2.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'casestudy2.destroy',
        'parent_flag' => 'casestudy2.index',
    ],
];
