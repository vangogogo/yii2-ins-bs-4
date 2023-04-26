<?php

namespace wzzwx\yii2Inspinia\assets;

use yii\web\AssetBundle;

class InspiniaAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/src';

    public $js = [
    ];

    public $css = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
