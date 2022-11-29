<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router(CONF_URL_BASE, ":");

$route->namespace("Source\App");

$route->group("/adm");
$route->get("/cadastro", "Adm:register");

$route->dispatch();


ob_end_flush();