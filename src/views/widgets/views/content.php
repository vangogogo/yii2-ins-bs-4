<?php

use yii\widgets\Breadcrumbs;

/* @var $theme \Henakel\Yii2InspiniaTpl\Theme */
/* @var $controllerCtx \yii\web\Controller */

if (isset($this->blocks['content-header'])) {
    $title = $this->blocks['content-header'];
}
else {
    if ($this->title !== null) {
        $title = \yii\helpers\Html::encode($this->title);
    }
    else {
        $title = \yii\helpers\Inflector::camel2words(
            \yii\helpers\Inflector::id2camel($controllerCtx->module->id)
        );
        $title .= ($controllerCtx->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
    }
}
?>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
        <?= $content; ?>
        </div>
    </div>
</div>
