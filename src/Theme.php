<?php

namespace Henakel\inspiniaTpl;

use Yii;
use yii\base\Theme as YiiTheme;
use yii\helpers\ArrayHelper;
use Henakel\Yii2InspiniaTpl\views\widgets\Header;
use Henakel\Yii2InspiniaTpl\views\widgets\Left;
use Henakel\Yii2InspiniaTpl\views\widgets\Footer;
use Henakel\Yii2InspiniaTpl\views\widgets\Content;

class Theme extends YiiTheme
{
    public $pathMap = [
        '@app/views' => '@vendor/Henakel/Yii2InspiniaTpl/src/views',
    ];

    public $bathPath = 'src';
    public $content;
    public $nowrap;
    public $watermark;
    public $menuItems;

    public $useRbacMenu = false;
    public $left = [];
    public $header = [];
    public $footer = [];
    public $main = [];

    public $user;

    public function init()
    {
        parent::init();
        if (!Yii::$app->user->isGuest) {
            $this->user = Yii::$app->user->identity;
        }
    }

    public function parseMenuItems()
    {
        if ($this->useRbacMenu) {
            return \mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id);
        }
        if ($this->menuItems instanceof \Closure) {
            return call_user_func($this->menuItems, $this, Yii::$app);
        }
        return $this->menuItems;
    }

    public function contentRenderer($content)
    {
        if ($this->content instanceof \Closure) {
            return call_user_func($this->content, $content, $this, Yii::$app);
        }
        return $content;
    }

    public function buildWrapperConfig($params)
    {
        return $params + [
                'theme' => $this,
                'noWrap' => $this->nowrap,
                'leftRender' => function ($widget) {
                    return $this->buildWidget($widget->theme->left, $widget, Left::class);
                },
                'headerRender' => function ($widget) {
                    return $this->buildWidget($widget->theme->header, $widget, Header::class);
                },
                'footerRender' => function ($widget) {
                    return $this->buildWidget($widget->theme->footer, $widget, Footer::class);
                },
                'contentRender' => function ($widget) {
                    return $this->buildWidget($widget->theme->main, $widget, Content::class);
                },
            ];
    }

    protected function buildWidget($config, $widget, $defaultClass)
    {
        if ($class = ArrayHelper::remove($config, 'class')) {
            return $class::widget($config);
        }
        return $defaultClass::widget($widget->comCfg() + $config);
    }
}