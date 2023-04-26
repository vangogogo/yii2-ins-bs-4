<?php

namespace Henakel\Yii2InspiniaTpl\views\widgets;

class Footer extends Widget
{
    public $view = 'footer';

    public function init()
    {
        parent::init();
        if (empty($this->replaceTags)) {
            $this->replaceTags = [
                'right' => '<b>Version</b> 2.0',
                'left' => '<strong>&copy;2008- '.date('Y').'</strong>',
            ];
        }
    }

    public function runInternal()
    {
        return $this->render($this->view, \Yii::getObjectVars($this));
    }
}
