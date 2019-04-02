# yii2-baguette-box
Yii2 Wrapper for [feimosi/baguetteBox.js](https://github.com/feimosi/baguetteBox.js)


## Install

```
composer require eluhr/yii2-baguette-box
```

## Usage

```php
<?php
use eluhr\baguettebox\widgets\BaguetteBox;

echo BaguetteBox::widget([
    'items' => [
        [
            '/path/to/image-0.jpg',
            'link-options' => [
                'data-caption' => 'My caption 0'
            ]
        ],
        [
            '/path/to/image-1.jpg',
            'link-options' => [
                'data-caption' => 'My caption 1'
            ]
        ],
        '/path/to/image-2.jpg',
        [
            '/path/to/image-3.jpg',
            'link-options' => [
                'data-caption' => 'My caption 2'
            ],
            'image-options' => [
                'class' => 'my-class'
            ]
        ],
        '/path/to/image-4.jpg',
        [
            '/path/to/image-6.jpg',
            'thumbnail' => '/path/to/image-6-thumbnail.jpg'
        ]
    ],
    'items_per_row' => 4,
    'plugin_options' => [
        'noScrollbars' => true
    ],
    'options' => [
        'class' => 'gallery'
    ]
]);
?>
```
