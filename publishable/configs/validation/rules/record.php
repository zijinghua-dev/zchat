<?php
return [
    'message_id' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'recordstore',
            ],
        ]
    ],
    'id' => [
        [
            'rule' => [
                'required',
                'numeric',
                'min:1'
            ],
            'action' => [
                'recorddelete',
            ],
        ]
    ]
];
