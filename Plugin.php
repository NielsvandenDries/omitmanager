<?php namespace OpenMindedIT\Omitmanager;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\OpenMindedIT\Omitmanager\Components\Subscription' => 'Subscription'
        ];
    }

    public function registerSettings()
    {
    }
}
