<?php
namespace meigo\forms;

use gui\Ext4JphpWindows;
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

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
        app()->shutdown();
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $a = new Ext4JphpWindows;
        $a->addBorder($this, 0.01, "#198754");
    }

}
