<?php

namespace MvcLite\Controllers\Documentation;

use MvcliteCore\Controllers\Controller;
use MvcliteCore\Router\Request;
use MvcliteCore\Views\View;

class HomeController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function render(): void
    {
        View::render("Documentation/Home", [
            //
        ]);
    }
}