<?php
return [
    'to' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'messagestore',
                'messageindex'
            ],
        ],
    ],
    'type' => [
        [
            'rule' => [
                'required',
                'string',
                'min:1'
            ],
            'action' => [
                'messagestore',
            ],
        ],
    ],
    'content' => [
        [
            'rule' => [
                'required',
                'string',
                'min:1'
            ],
            'action' => [
                'messagestore',
            ],
        ],
    ],
    'limit' => [
        [
            'rule' => [
                'numeric',
                'min:1'
            ],
            'action' => [
                'messageindex',
            ],
        ],
    ],
    'firstid' => [
        [
            'rule' => [
                'numeric',
                'min:1'
            ],
            'action' => [
                'messageindex',
            ],
        ],
    ],
    'id' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'messagedelete',
            ],
        ],
    ],
    'nickname' => [
        [
            'rule' => [
                'required',
                'string',
                'min:1'
            ],
            'action' => [
                'messagedelete',
            ],
        ],
    ],
];
