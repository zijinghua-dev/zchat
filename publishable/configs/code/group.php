<?php
return [
    'groupstore' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '聊天室创建成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_SUBMIT_FAILED',
                'status' => false,
                'message' => '聊天室创建失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '创建聊天室所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '创建聊天室所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '创建聊天室所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '创建聊天室所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPSTORE_VALIDATION_FAILED',
                'status' => false,
                'message' => '创建聊天室数据时输入参数验证失败!'
            ]

        ],
    ],
    'groupindex' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '获取聊天室列表成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_SUBMIT_FAILED',
                'status' => false,
                'message' => '获取聊天室列表失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '获取聊天室列表所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '获取聊天室列表所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '获取聊天室列表所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '获取聊天室列表所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATROOMGROUP_GROUPINDEX_VALIDATION_FAILED',
                'status' => false,
                'message' => '获取聊天室列表时输入参数验证失败!'
            ]

        ],
    ],
];
