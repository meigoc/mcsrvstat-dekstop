<?php
namespace meigo\forms;

use std, gui, framework, meigo;


class _window extends AbstractForm
{

    /**
     * @event close.click-Left 
     */
    function doCloseClickLeft(UXMouseEvent $e = null)
    {
        app()->shutdown();
    }

    /**
     * @event minimize.click-Left 
     */
    function doMinimizeClickLeft(UXMouseEvent $e = null)
    {
        app()->minimizeForm($this->getContextFormName());
    }

}
