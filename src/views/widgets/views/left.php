<?php

namespace Henakel\Yii2InspiniaTpl;

use Yii;
use yii\helpers\ArrayHelper;

/* @var $theme \Henakel\Yii2InspiniaTpl\Theme */
/** @var $assetPath */
$user = $theme->user;
$logo = $assetPath . '/img/logo.jpg';
if ($user && isset($user->avatar) && !empty($user->avatar)) {
    $logo = $user->avatar;
}

?>
<nav class="navbar-default navbar-static-side" role='navigation'>
    <div class="sidebar-collapse">
        <?php
        echo widgets\Menu::widget([
            'items' => $theme->parseMenuItems(),
            'options' => ['class' => 'nav metismenu', 'id' => 'side-menu'],
            'submenuTemplate' => "\n<ul class='nav nav-fourth-level' {show}>\n{items}\n</ul>\n",
            'tplMap' => [
                "\n<ul class='nav nav-second-level' {show}>\n{items}\n</ul>\n",
                "\n<ul class='nav nav-third-level' {show}>\n{items}\n</ul>\n",
                "\n<ul class='nav nav-fourth-level' {show}>\n{items}\n</ul>\n",
            ],
        ]);
        ?>
    </div>
</nav>
