<?php

namespace Henakel\Yii2InspiniaTpl\views\widgets;

class Content extends Widget
{
    public $view = 'content';

    public function init()
    {
        parent::init();
        if (empty($this->replaceTags)) {
            $this->replaceTags = [
                'before_nav' => '',
                'alert' => '',
            ];
        }
    }

    public function runInternal()
    {
        return $this->render($this->view, \Yii::getObjectVars($this));
    }
}
