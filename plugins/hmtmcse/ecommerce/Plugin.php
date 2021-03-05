<?php namespace Hmtmcse\Ecommerce;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'ecommerce',
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
            'Hmtmcse\Ecommerce\Components\MyComponent' => 'myComponent',
        ];
    }


    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'hmtmcse.ecommerce.some_permission' => [
                'tab' => 'ecommerce',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerNavigation()
    {
        return [
            'ecommerce' => [
                'label'       => 'eCommerce',
                'url'         => Backend::url('hmtmcse/ecommerce/ecommerce'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['hmtmcse.ecommerce.*'],
                'order'       => 500,

                'sideMenu' => [
                    'dashboard' => [
                        'label'       => 'Dashboard',
                        'icon'        => 'icon-dashboard',
                        'url'         => Backend::url('hmtmcse/ecommerce/ecommerce'),
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ],
                    'order' => [
                        'label'       => 'Order',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('rainlab/blog/categories'),
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ],
                    'customer' => [
                        'label'       => 'Customer',
                        'icon'        => 'icon-address-card',
                        'url'         => Backend::url('rainlab/blog/posts/create'),
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ],
                    'product' => [
                        'label'       => 'Product',
                        'icon'        => 'icon-cubes',
                        'url'         => Backend::url('rainlab/blog/posts'),
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ]
                ]
            ],
        ];
    }
}
