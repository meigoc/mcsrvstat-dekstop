<?php
namespace meigo\modules;

use std, gui, framework, meigo;


class MainModule extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $state = $this->browser->engine->state;
        $url = $this->browser->engine->url;
        
        if ($state == "RUNNING"){
            // RUNNING
            $this->label->visible = false;
            $this->labelAlt->visible = false;
            $this->image->visible = false;
            $this->browser->opacity = 0.01;
        } elseif ($state == "SUCCEEDED"){
            // SUCCEEDED
            app()->form("_window")->title = $this->browser->engine->title;
            
            $this->label->visible = true;
            $this->labelAlt->visible = false;
            $this->image->visible = false;
            $this->browser->opacity = 1;
            
        } else {
            // CANCELLED OR SOMETHING
        }
        
        
        
        if ($url == "https://api.mcsrvstat.us/"){
            // https://api.mcsrvstat.us/
            $this->browser->engine->url = "https://mcsrvstat.us/";
            $this->form("_window")->toast("Этот ресурс недоступен.");
        } elseif ($url == "https://status.mcsrvstat.us/") {
            $this->browser->engine->url = "https://mcsrvstat.us/";
            $this->form("_window")->toast("Этот ресурс недоступен.");
        }
        
    }

}
