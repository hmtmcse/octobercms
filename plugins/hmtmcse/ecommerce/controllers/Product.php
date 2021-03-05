<?php namespace Hmtmcse\Ecommerce\Controllers;

use BackendMenu;
use Backend\Classes\Controller;


class Product extends Controller
{

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];


    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Hmtmcse.Ecommerce', 'ecommerce', 'product');
    }
}
