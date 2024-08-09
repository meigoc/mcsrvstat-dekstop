<?php
namespace meigo\forms;

use std, gui, framework, meigo;


class MainForm extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->timer->start();
    }

}
