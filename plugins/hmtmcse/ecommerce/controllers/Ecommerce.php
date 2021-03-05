<?php namespace Hmtmcse\Ecommerce\Controllers;

use BackendMenu;
use Backend\Classes\Controller;


class Ecommerce extends Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Hmtmcse.Ecommerce', 'ecommerce', 'ecommerce');
    }

    public function index(){
        $this->pageTitle = 'eCommerce Dashboard';
        BackendMenu::setContextSideMenu('dashboard');
    }
}
