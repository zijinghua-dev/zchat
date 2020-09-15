<?php
return [
    'recordstore' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '收藏成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_SUBMIT_FAILED',
                'status' => false,
                'message' => '收藏失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '收藏消息所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '收藏消息所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '收藏消息所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '收藏消息所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_VALIDATION_FAILED',
                'status' => false,
                'message' => '创建聊天室数据时输入参数验证失败'
            ],
            'ownerfailed' => [
                'http_code' => 406,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDSTORE_VALIDATION_OWNERFAILED',
                'status' => false,
                'message' => '用户不是该聊天室成员，无法收藏消息!'
            ]
        ],
    ],
    'recordindex' => [
        'submit' => [
            'success' => [
                'http_code' => 201,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '获取收藏列表成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_SUBMIT_FAILED',
                'status' => false,
                'message' => '获取收藏列表失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '获取收藏列表所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '获取收藏列表所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '获取收藏列表所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '获取收藏列表所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDINDEX_VALIDATION_FAILED',
                'status' => false,
                'message' => '获取收藏列表时输入参数验证失败!'
            ]

        ],
    ],
    'recorddelete' => [
        'submit' => [
            'success' => [
                'http_code' => 200,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_SUBMIT_SUCCESS',
                'status' => true,
                'message' => '删除收藏成功!'
            ],
            'failed' => [
                'http_code' => 403,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_SUBMIT_FAILED',
                'status' => false,
                'message' => '删除收藏失败!'
            ],
        ],
        'load' => [
            'rules' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_LOAD_RULES_SUCCESS',
                    'status' => true,
                    'message' => '删除收藏所需验证规则加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_LOAD_RULES_FAILED',
                    'status' => false,
                    'message' => '删除收藏所需验证规则加载失败!'
                ],

            ],
            'messages' => [
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_LOAD_MESSAGES_SUCCESS',
                    'status' => true,
                    'message' => '删除收藏所需验证规则的提示信息加载成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '删除收藏所需验证规则的提示信息加载失败!'
                ],

            ],
        ],
        'validation' => [
            'existsfailed' => [
                'http_code' => 404,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_VALIDATION_EXISTSFAILED',
                'status' => false,
                'message' => '删除收藏不存在！'
            ],
            'failed' => [
                'http_code' => 422,
                'code' => 'ZBASEMENT_CODE_CHATRECORD_RECORDDELETE_VALIDATION_FAILED',
                'status' => false,
                'message' => '删除收藏时输入参数验证失败！'
            ]
        ],
    ],
];
