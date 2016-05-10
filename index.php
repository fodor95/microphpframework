<?php 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//   __ ___  ____              _                       __                                             _     //
//  / _/ _ \| ___|   _ __ ___ (_) ___ _ __ ___        / _|_ __ __ _ _ __ ___   _____      _____  _ __| | __ //
// | || (_) |___ \  | '_ ` _ \| |/ __| '__/ _ \ _____| |_| '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ / //
// |  _\__, |___) | | | | | | | | (__| | | (_) |_____|  _| | | (_| | | | | | |  __/\ V  V / (_) | |  |   <  //
// |_|   /_/|____/  |_| |_| |_|_|\___|_|  \___/      |_| |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\ //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// LICENCE: FREE TO USE, SHARE, EDIT, DEVELOPE AND FOR EDUCATIONAL PURPOSES. STRICTLY FORBIDDEN TO SELL.    //
// FEEL FREE TO USE IT FOR YOUR PROJECT.                                                                    //
// CREATED BY: FODOR TIBOR, iwdesign88@gmail.com  															//
// DATE: 2016 MAY 																							//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
	$response->setContent('This is the website home');
	HA HIBA LEPETT FEL

	$response->setStatusCode(Response::HTTP_NOT_FOUND);
	$response->send();
*/

/*
 * INITIALIZE SYMFONY ROUTING
 *
 */

	$loader = require 'vendor/autoload.php';
	$loader->register();

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpKernel\HttpKernelInterface;

/* 
 * INITIALIZE HELP--SYMFONY 
 * 
 */
	require 'lib/Framework/Core.php';
	$request = Request::createFromGlobals();

	$app = new Framework\Core();

/* 
 * REGISTERING THE KERNEL
 * 
 */
	require_once 'classes/kernel.php';
	$kernel = new kernel();

/*
 * REGISTERING THE DATABASE
 *
 */
	require_once 'classes/mysqldatabase.php';
	$db = mySqlDatabase::getInstance();
	$mysqli = $db->getConnection(); 

// USAGE OF THE DB CLASS
/*
	$sql_query = "SELECT * FROM staticpages";
	$result = $mysqli->query($sql_query);
	var_dump($result);
*/


/*
 * REGISTERING TWIG
 *
 */

	$kernel::loadTwig();

// USAGE
/*
	require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
*/	


/*
 * REGISTERING THE ROUTING
 *
 */
	require_once 'routes/routing.php';
	$routing = new routing();

// URL MAPPINGS EXAMPLE 
/*
	$app->map('', function ($name) {
			global $twig;
			$oldal = $twig->render('index.html', array('the' => 'variables', 'go' => $name ));
			return new Response( $oldal );	
		});
*/


/*
 * GENERATES THE OUTPUT
 *
 */
	$response = $app->handle($request);
	$response->send();

/*
 * EXAMPLE USAGE OF LOADIN A CONTROLLER
 */
// $kernel->loadController('staticPagesController');

/*
 * UNSETTING ALL THE OBJECTS FOR SECURITY REASONS
 *
 */

///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
