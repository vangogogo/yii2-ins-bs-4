- Инициализация шаблона

```
'components' => [
    'view' => [
        'theme' => [
            'class' => 'Henakel\inspiniaTpl\Theme',
            'nowrap' => !YII_DEBUG,
            'menuItems' => [
                [
                    'label' => 'Вложенность',
                    'items' => [
                        [
                            'label' => 'name_1_1',
                            'url' => '#',
                        ],
                        [
                            'label' => 'name_1_2',
                            'url' => '#',
                        ],
                    ],
                ],
                [
                    'label' => 'name_2',
                    'url' => '#',
                ],
            ],
            // footer
            'footer' => [
                'replaceTags' => [
                    'right' => '<b>Version</b> 2.0',
                    'left' => '<strong>&copy;2018- ' . date('Y') . ' callmewz 京ICP备19042689号-1</strong>',
                ],
            ],
        ],
    ],
],
```

