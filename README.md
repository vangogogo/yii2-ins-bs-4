- Инициализация шаблона

```
'components' => [
    'view' => [
        'theme' => [
            'class' => 'Henakel\Yii2InspiniaTpl\Theme',
            'nowrap' => !YII_DEBUG,
            'menuItems' => [
                [
                    'icon' => 'cogs',
                    'noticeLabel' => '23',
                    'noticeType' => 'danger',
                    'label' => 'Ext',
                    'options' => ['class' => 'nav-header'],
                    'template' => '<div class="dropdown profile-element"><div class="logo-full"><a href="/">Exchange</a></div></div>'
                ],
                ['label' => 'Ссылка 2', 'url' => ['site/index']],
                [
                    'icon' => 'cogs',
                    'noticeLabel' => '23',
                    'noticeType' => 'danger',
                    'label' => 'Ссылка 1',
                    'url' => ['/site/about']
                ],
                [
                    'icon' => 'cogs',
                    'noticeLabel' => '23',
                    'noticeType' => 'danger',
                    'label' => 'Ссылка 2',
                    'url' => ['/site/contact']
                ],

                [
                    'label' => 'Элемент 1',
                    'icon' => 'cogs',
                    'noticeLabel' => '23',
                    'noticeType' => 'warning',
                    'options' => ['class' => 'dropdown'],
                    'items' => [
                        [
                            'icon' => 'cogs',
                            'noticeLabel' => '23',
                            'noticeType' => 'danger',
                            'label' => 'Ссылка 1',
                            'url' => ['/site/about']
                        ],
                        [
                            'icon' => 'cogs',
                            'noticeLabel' => '23',
                            'noticeType' => 'primary',
                            'label' => 'Ссылка 2',
                            'url' => '#',
                            'items' => [
                                [
                                    'icon' => 'cogs',
                                    'noticeLabel' => '23',
                                    'noticeType' => 'danger',
                                    'label' => 'Ссылка 1',
                                    'url' => ['/site/about']
                                ],
                                [
                                    'icon' => 'cogs',
                                    'noticeLabel' => '23',
                                    'noticeType' => 'danger',
                                    'label' => 'Ссылка 2',
                                    'url' => ['/site/contact']
                                ],
                            ]
                        ],
                    ]
                ],

            ],
            // footer
            'footer' => [
                'replaceTags' => [
                    'right' => '<b>Version</b> 2.0',
                    'left' => '<strong>&copy;2008- ' . date('Y') . '</strong>',
                ],
            ],
            'left' => [
                'replaceTags' => [
                    'dropdown' => 'fg dsfg dsfg dsfg sdg dsf g',
                ],
            ],
            'header' => [
                'replaceTags' => [
                    'nav_right' => '111'
                ]
            ]
        ],
    ],
],
```

