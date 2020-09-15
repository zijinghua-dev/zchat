<?php
return [
    'chat_service' => [
        'host' => env('CHAT_SERVICE_HOST'),
        'api' => [
            'group' => [
                'base' => '/api/chatroom/group',
            ],
            'message' => [
                'base' => '/api/chatroom/message',
            ],
            'record' => [
                'base' => '/api/chatroom/medical-record',
            ]
        ]
    ],
    'project_id' => env('PROJECT_ID'),
];
