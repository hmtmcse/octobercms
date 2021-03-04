<?php namespace Hmtmcse\Structure;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'structure',
            'description' => 'No description provided yet...',
            'author'      => 'hmtmcse',
            'icon'        => 'icon-leaf'
        ];
    }


    public function register()
    {

    }


    public function boot()
    {

    }


    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Hmtmcse\Structure\Components\MyComponent' => 'myComponent',
        ];
    }


    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'hmtmcse.structure.some_permission' => [
                'tab' => 'structure',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerNavigation()
    {

        return [
            'structure' => [
                'label'       => 'Structure Plugin',
                'url'         => Backend::url('hmtmcse/structure/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hmtmcse.structure.*'],
                'order'       => 500,
            ],
        ];
    }
}
