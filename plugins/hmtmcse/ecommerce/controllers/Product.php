<?php namespace Hmtmcse\Ecommerce\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use RainLab\Blog\Models\Post;


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

    public function index()
    {

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        return $this->asExtension('FormController')->update($recordId);
    }
}
