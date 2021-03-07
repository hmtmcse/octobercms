<?php namespace Hmtmcse\Ecommerce;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'eCommerce',
            'description' => 'eCommerce Example Plugin',
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
        return [
            'Hmtmcse\Ecommerce\Components\ECommerceComponent' => 'eCommerce',
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
                        'url'         => "#",
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ],
                    'customer' => [
                        'label'       => 'Customer',
                        'icon'        => 'icon-address-card',
                        'url'         => "#",
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ],
                    'product' => [
                        'label'       => 'Product',
                        'icon'        => 'icon-cubes',
                        'url'         => Backend::url('hmtmcse/ecommerce/product'),
                        'permissions' => ['hmtmcse.ecommerce.*'],
                    ]
                ]
            ],
        ];
    }
}
