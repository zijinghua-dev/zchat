<?php
return [
    'message_id' => [
        [
            'message'=>[
                'numeric'=>'必须是整数类型',
                'min'=>'必须大于等于1',
            ],
            'action'=>[
                'recordstore',
            ]
        ],
    ],
    'id' => [
        [
            'message'=>[
                'numeric'=>'必须是整数类型',
                'min'=>'必须大于等于1',
            ],
            'action'=>[
                'recorddelete',
            ]
        ],
    ]
];
