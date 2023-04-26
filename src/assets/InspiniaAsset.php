<?php

namespace Henakel\Yii2InspiniaTpl\assets;

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
