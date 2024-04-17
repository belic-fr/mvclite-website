<?php

namespace MvcLite\Controllers;

use MvcliteCore\Controllers\Controller;
use MvcliteCore\Router\Request;
use MvcliteCore\Views\View;

class IndexController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function render(): void
    {
        View::render("Index", [
            //
        ]);
    }
}