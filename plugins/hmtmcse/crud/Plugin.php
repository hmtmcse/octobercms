<?php namespace Hmtmcse\Crud;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'CRUD',
            'description' => 'October CMS CRUD Example Plugin',
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
            'Hmtmcse\Crud\Components\MyComponent' => 'myComponent',
        ];
    }


    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'hmtmcse.crud.some_permission' => [
                'tab' => 'crud',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerNavigation()
    {
        return [
            'crud' => [
                'label'       => 'CRUD',
                'url'         => Backend::url('hmtmcse/crud/person'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hmtmcse.crud.*'],
                'order'       => 500,
            ],
        ];
    }
}
