<?php
ob_start();
session_start();

require __DIR__."/vendor/autoload.php";
use CoffeeCode\Router\Router;

$router = new Router(site());

$router->group(NULL);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web:reset");

$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");

$router->dispatch();

if ($router->error())
	$router->redirect("web.error", ["errcode" => $router->error()]);

ob_end_flush();