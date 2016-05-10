<?php 

namespace Framework;


// define('__ROOT__', dirname(dirname(__FILE__)));

//loads the kernel methods;
require_once('classes/kernel.php');
require_once('classes/mysqldatabase.php');
require_once('classes/viewrender.php');

//load the kernel class;
$kernel = new kernel();



/*INITIALIZE DATABASE
 *
 *
 */
$database = new mySqlDatabase();

    $db = mySqlDatabase::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SHOW TABLES";
    $result = $mysqli->query($sql_query);


/*
 *INITIALIZE TWIG
 *
 */


require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
));


	
echo $twig->render('index.html', array('the' => 'variables', 'go' => 'here'));

/*
 * INITIALIZE SYMFONY ROUTING
 */



$loader = require 'vendor/autoload.php';
    $loader->register();

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpKernel\HttpKernelInterface;


    $request = Request::createFromGlobals();
    $response = new Response();


$response->setContent('This is the website home');

// HA HIBA LEPETT FEL
// $response->setStatusCode(Response::HTTP_NOT_FOUND);


// $response->send();



require 'lib/Framework/Core.php';
  
    $request = Request::createFromGlobals();
    
    // Our framework is now handling itself the request
    $app = new Framework\Core();
    
    $response = $app->handle($request);
    $response->send();






?>