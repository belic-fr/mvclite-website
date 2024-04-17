<?php

/*
 * routes.php
 * MVCLite framework by belicfr
 */


use MvcLite\Controllers\IndexController;
use MvcliteCore\Router\Router;

Router::get("/", IndexController::class, "render");