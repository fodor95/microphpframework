<?php

class kernel {
	public function __construct(){
		//does something on construct;
		$this::defineConstants();

		//closes the whole website if the 
		if(SITE_ONLINE == FALSE)
			die(WEBSITE_OFFLINE);
	}


	private function defineConstants(){
		//requires the constants;
		require_once('/../constants.php');

	}

	private function loadClasses(){
		//requires the database commands;
		require_once('/mysqldatabase.php');
	}


	public function loadTwig(){
		//load twig with options
		global $loader; 
		global $twig;
		
		require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
		
		Twig_Autoloader::register();

		//Twig_Loader_Filesystem(TWIG_TEMPLATE_FOLDER); => TWIG_TEMPLATE_FOLDER = the folder where view templates are stored
		$loader	= new Twig_Loader_Filesystem(TWIG_TEMPLATE_FOLDER); 

		//setting up caching
		if(TWIG_ENABLE_CACHE == TRUE)
			$twig = new Twig_Environment($loader, array('cache' => TWIG_CACHE_FOLDER) );
		else
			$twig = new Twig_Environment($loader);
	}



	public function loadController($controller){
		//loads the given controller
		require_once '/../' . KERNEL_CONTROLLER_DIRECTORY . '/' . $controller . '.php';

		global $$controller;
		$$controller = new $controller;

	} 
}

