<?php 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class routing extends kernel {

	public $routes;

		
	
	public function __construct(){
		$this->routes();
	}

	public function routes(){
		global $app;
		
		$app->map('', function ($name) {
		
			global $twig;

			$oldal = $twig->render('index.html', array('the' => 'osztajbol', 'go' => $name . '-valo ' ));
		
		return new Response( $oldal );


		});



		$app->map('/contact', function ($name) {
			global $twig;


			$oldal = $twig->render('index.html', array('the' => 'szilvafa', 'go' => $name . '-valo ' ));
		
		return new Response( $oldal );


		});

	}




}

$routes['name/of/the/route']['controller/name/and/{space}'] = 'cigany';