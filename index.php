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


define ('baseURL' , "http://" . $_SERVER['SERVER_NAME'] . '/anuntulmeu/'); 


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
	



	// $kernel -> loadController('staticPagesController');

/*
 * REGISTERING THE DATABASE
 *
 */
/*	--DEPRECATED++
	require_once 'classes/mysqldatabase.php';
	$db = new mySqlDatabase();
	$db->connect();
	--DEPRECATED++
*/

	// $db->select('staticpages'); // Table name
	// $res = $db->getResult();
	// print_r($res);

// USAGE OF THE DB CLASS
/*
	$sql_query = "SELECT * FROM staticpages";
	$result = $mysqli->query($sql_query);
	var_dump($result);
*/

require_once 'classes/vendor/phpmysqlclassmaster/class.DBPDO.php';
$DB = new DBPDO();

// fixing the special character display problems
$DB->execute("set names 'utf8'");

/*
 * REGISTERING TWIG
 *
 */
	$kernel::loadTwig();

	// EXAMPLE FOR CREATING A FUNCTION
	// creating baseURL function for generating links
	$function = new Twig_SimpleFunction('baseURL', function ($bemenet='') {
	    echo baseURL . 'index.php/' . $bemenet;
	});
	$twig->addFunction($function);
	

	$function = new Twig_SimpleFunction('baseURLnoIndex', function ($bemenet='') {
	    echo baseURL . $bemenet;
	});
	$twig->addFunction($function);
	


	
	// END OF EXAMPLE FOR CREATING A FUNCTION


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


// echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '/index.php/contact'; 
