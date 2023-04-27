<?php

namespace Henakel\Yii2InspiniaTpl\views\widgets;

class Header extends Widget
{
    public $view = 'header';

    public function init()
    {
        parent::init();
        if (isset($this->replaceTags['btn_logout']))


        if (empty($this->replaceTags)) {
            $this->replaceTags = [
                'nav_left' => '',
                'btn_logout' => '<ul class="nav navbar-top-links navbar-right"><li>
                    <a href="/site/logout">
                        <i class="fa fa-sign-out"></i> Выход
                    </a>
                </li></ul>',
            ];
        }
    }

    public function runInternal()
    {
        return $this->render($this->view, \Yii::getObjectVars($this));
    }
}
