<?php
return [
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
