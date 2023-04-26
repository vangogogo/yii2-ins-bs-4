<?php

namespace Henakel\Yii2InspiniaTpl\assets;

use yii\web\AssetBundle;

class InspiniaAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/src';

    public $js = [
        '/js/bootstrap.min.js'
    ];

    public $css = [
        '/css/bootstrap.min.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
