<?php 

namespace Source\controllers;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller {
	/** @var Engine */
	protected $view;

	/** @var Router */
	protected $router;

	public function __construct($router) {
		$this->router = $router;
		$this->view = Engine::create(diname(__DIR__, 2)."/views", "php");
		$this->addData(["router" => $this->router]);
	}

	public function ajaxResponse(string $param, array $values): string {
		return json_encode($param => $values);
	}
}