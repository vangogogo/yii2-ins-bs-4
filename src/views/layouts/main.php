<?php

use yii\helpers\Html;
use Henakel\Yii2InspiniaTpl\assets\InspiniaAsset;
use Henakel\Yii2InspiniaTpl\views\widgets\Wrapper;

InspiniaAsset::register($this);

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $theme \Henakel\Yii2InspiniaTpl\Theme */

$theme = $this->theme;
$assetPath = Yii::$app->assetManager->getBundle(InspiniaAsset::class)->baseUrl;
$content = $theme->contentRenderer($content);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags(); ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>
<?php
$this->beginBody();
$params = compact('assetPath', 'content');
echo Wrapper::widget($theme->buildWrapperConfig($params) + ['controllerCtx' => $this->context]);
$this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
