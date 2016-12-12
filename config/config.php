<?php
return [
    'adminRoles' => ['admin', 'su', 'small-admin'],
    'adminLevel' => [98, 99],
    'components' => [
        [
            'type' => 'text',
            'label' => 'Text field',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'default' => [
                    'type' => 'text',
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'translatable' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'url',
            'label' => 'URL',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'default' => [
                    'type' => 'text',
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'email',
            'label' => 'email',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'number',
            'label' => 'Number',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'default' => [
                    'type' => 'text',
                    'required' => true,
                    'value' => 0
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'step' => [
                    'type' => 'number',
                    'required' => false,
                    'value' => 1
                ],
                'min' => [
                    'type' => 'number',
                    'required' => false,
                    'value' => 0
                ],
                'max' => [
                    'type' => 'number',
                    'required' => false
                ],
            ]
        ],
        [
            'type' => 'date',
            'label' => 'Date',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'boolean',
            'label' => 'Boolean',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'textarea',
            'label' => 'Text area',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'default' => [
                    'type' => 'text',
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'translatable' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'richtext',
            'label' => 'Rich text',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'default' => [
                    'type' => 'text',
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'translatable' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ]
        ],
        [
            'type' => 'select',
            'label' => 'Dropdown',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'options' => [
                    'params' => [
                        "default" => [
                            'type' => 'boolean',
                            'unique' => true
                        ],
                        "label" => [
                            'type' => 'text',
                            'required' => true,
                            'multilingual' => true
                        ],
                        "value" => [
                            'type' => 'text',
                            'required' => true,
                        ]
                    ]
                ]
            ]
        ],
        [
            'type' => 'selectMultiple',
            'label' => 'Multiple select',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'placeholder' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'options' => [
                    'params' => [
                        "default" => [
                            'type' => 'boolean',
                            'unique' => true
                        ],
                        "label" => [
                            'type' => 'text',
                            'required' => true,
                            'multilingual' => true
                        ],
                        "value" => [
                            'type' => 'text',
                            'required' => true,
                            'multilingual' => true
                        ]
                    ]
                ]
            ]
        ],
        [
            'type' => 'file',
            'label' => 'File',
            'params' => [
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'translatable' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ],
        ],
        [
            'type' => 'image',
            'label' => 'Image',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true
                ],
                'description' => [
                    'type' => 'text',
                    'required' => true,
                ],
                'required' => [
                    'type' => 'boolean',
                    'value' => false
                ],
                'translatable' => [
                    'type' => 'boolean',
                    'value' => false
                ],
            ],
            'settings' => [
                'width' => [
                    'type' => 'number',
                    'required' => false
                ],
                'height' => [
                    'type' => 'number',
                    'required' => false
                ],
            ]
        ],
        [
            'type' => 'itemSelector',
            'label' => 'Item Selector',
            'params' => [
                'label' => [
                    'type' => 'text',
                    'required' => true,
                    'toSlug' => 'varName',
                    'multilingual' => true
                ],
                'varName' => [
                    'type' => 'text',
                    'required' => true,
                ],
            ],
            'config' => [
                'multiple' => [
                    'type' => 'boolean',
                    'default' => true,
                ],
                'maxItems' => [
                    'type' => 'number',
                    'default' => null,
                ],
                'minItems' => [
                    'type' => 'number',
                    'default' => null,
                ],
                'hasFilters' => [
                    'type' => 'boolean',
                    'default' => true,
                ],
            ],
        ],
    ]
];