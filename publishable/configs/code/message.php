<?php
return [
    'messagestore' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '消息发送成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_SUBMIT_FAILED',
                'status' => false,
                'message' => '消息发送失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '发送消息所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '发送消息所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '发送消息所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '发送消息所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_VALIDATION_FAILED',
                'status' => false,
                'message' => '发送消息时输入参数验证失败！'
            ],
            'ownerfailed' => [
                'http_code' => 406,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGESTORE_VALIDATION_OWNERFAILED',
                'status' => false,
                'message' => '用户不是该聊天室成员，无法发送消息！'
            ],
        ],
    ],
    'messageindex' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '获取消息列表成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_SUBMIT_FAILED',
                'status' => false,
                'message' => '获取消息列表失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '获取消息列表所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '获取消息列表所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '获取消息列表所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '获取消息列表所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEINDEX_VALIDATION_FAILED',
                'status' => false,
                'message' => '获取消息列表时输入参数验证失败!'
            ]

        ],
    ],
    'messagedelete' => [
        'submit' => [
            'success' => [
                'http_code' => 200,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '撤回消息成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_SUBMIT_FAILED',
                'status' => false,
                'message' => '撤回消息失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '撤回消息所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '撤回消息所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '撤回消息所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '撤回消息所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'existsfailed' => [
                'http_code' => 404,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_VALIDATION_EXISTSFAILED',
                'status' => false,
                'message' => '信息不存在！'
            ],
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_VALIDATION_FAILED',
                'status' => false,
                'message' => '撤回消息时时输入参数验证失败！'
            ],
            'ownerfailed' => [
                'http_code' => 406,
                'code' => 'ZBASEMENT_CODE_CHATMESSAGE_MESSAGEDELETE_VALIDATION_OWNERFAILED',
                'status' => false,
                'message' => '信息已经超过时限，不允许撤回！！'
            ],
        ],
    ],
];
