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
		
		$app->map('', function () {
		//FRONT PAGE
			global $twig;

			$oldal = $twig->render('index.html', array('the' => 'osztajbol', 'go' =>  '-valo ' ));
		
		return new Response( $oldal );


		});



		$app->map('/contact', function ($result) {
		// CONTACT PAGE
			global $twig;
			global $kernel; 
			$kernel->loadController('staticPagesController');
			global $staticPagesController;


			
			$result = $staticPagesController->showPage('Contact');

			// $name = 'fasz';

			$oldal = $twig->render('frontend/staticpages.html', array('content' => $result ));
		
		return new Response( $oldal );


		});


		$app->map('/ajutor', function ($result) {
		// CONTACT PAGE
			global $twig;
			global $kernel; 
			$kernel->loadController('staticPagesController');
			global $staticPagesController;

			

			$result = $staticPagesController->showPage('Ajutor');


			$oldal = $twig->render('frontend/staticpages.html', array('content' => $result ));
		
		return new Response( $oldal );


		});


		$app->map('/adaugasos', function ($result) {
		// CONTACT PAGE
			global $twig;
			global $kernel;
			// $kernel -> loadController()

			// $result = $staticPagesController->showPage('Ajutor');

			$oldal = $twig->render('frontend/adaugasos.html', array('content' => $result ));
		
		return new Response( $oldal );


		});


		$app->map('/adaugasos/localitati/{location}', function ($localitate) {
		// CONTACT PAGE
			global $twig;
			global $kernel;
			$kernel -> loadController('adaugaSosController');
			global $adaugaSosController;

			$result = $adaugaSosController-> getLocations($localitate);

			// print_r($result);

			$oldal = $twig->render('frontend/adaugasoslocations.html', array('locations' => $result ));
		
		return new Response( $oldal );


		});

		$app->map('/adaugasos/imageupload', function () {
		// CONTACT PAGE
			
			global $kernel;
			$kernel -> loadController('adaugaSosController');
			global $adaugaSosController;

			$result = $adaugaSosController->uploadImages();

			
		return new Response( $result );


		});

		$app->map('/feedback', function () {
		// CONTACT PAGE
			
			global $kernel;
			$kernel -> loadController('feedbackController');
			global $feedbackController;

			$result = $adaugaSosController->uploadImages();

			
		return new Response( $result );


		});



	}




}
