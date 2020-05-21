<?php 

	require __DIR__ . "/vendor/autoload.php";

	use CoffeeCode\Router\Router;

	$router = new Router(ROOT);

	$router->namespace("Source\Controller");


	$router->group(null);

	$router->get("/", "WebController:home");
	$router->get("/contato", "WebController:contato");


	$router->dispatch();

	/*
	 * Redirect all errors
	 */
	if ($router->error()) {
	    $router->redirect("/error/{$router->error()}");
	}


 ?>