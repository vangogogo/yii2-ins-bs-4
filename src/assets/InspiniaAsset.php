<?php

namespace Henakel\Yii2InspiniaTpl\assets;

use yii\web\AssetBundle;

class InspiniaAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/src';

    public $js = [
        'js/bootstrap.min.js',
        'js/inspinia.js'
    ];

    public $css = [
        'css/bootstrap.min.css',
        'css/inspinia.css',

        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css',
        'css/fix.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'Henakel\Yii2InspiniaTpl\assets\MetisMenuAsset',
    ];
}
