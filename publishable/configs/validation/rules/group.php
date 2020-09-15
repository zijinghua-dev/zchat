<?php
return [
    'creator_id' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'groupstore',
                'groupindex'
            ],
        ],
    ],
    'answers_id' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'groupstore',
                'groupindex'
            ],
        ],
    ],
];
