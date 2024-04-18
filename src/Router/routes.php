<?php

/*
 * routes.php
 * MVCLite framework by belicfr
 */


use MvcLite\Controllers\Documentation\HomeController;
use MvcLite\Controllers\IndexController;
use MvcliteCore\Router\Router;

Router::get("/", IndexController::class, "render")
    ->setName("home");

Router::get("/docs/home", HomeController::class, "render")
    ->setName("docs.home");