<?php 
	/*
	 *GLOBAL CONSTANTS
	 *TODO: IT HAS TO BE ENCODED IN SOME WAY
	 *
	 *
	 */

	/*
	 * WEBSITE SETTINGS
	 *
	 */

define('SITE_ONLINE' 		, TRUE		);
define('DEBUG_MODE' 		, FALSE		);

	/*
	 * MYSQL DATABASE CONSTANTS
	 *
	 */

define('MYSQL_HOST' 		, 'localhost'	);
define('MYSQL_USERNAME'		, 'root'		);
define('MYSQL_PASSWORD'		, ''			);
define('MYSQL_DATABASE'		, 'anuntulmeu'	);

	/*
	 * BACKEND KEYS
	 * 
	 */

define('ADMINISTRATOR_USERNAME', 	'ADMIN'	);
define('ADMINISTRATOR_PASSWORD', 	'PASS'	); 

	/*
	 * ERROR MESSAGES
	 * 
	 */

define('ERROR_ON_MYSQL_CONNECTION'			, 	'#0001#: ERROR DURRING CONTACTING THE DATABASE SERVER'					);
define('WEBSITE_OFFLINE'					, 	'#0002#: THE WEBSITE HAS BEEN CLOSED BY THE ADMINISTRATOR'				);
	
	/*
	 * TWIG SETTINGS
	 * 
	 */

define('TWIG_TEMPLATE_FOLDER'		, 	'views'	);
define('TWIG_ENABLE_CACHE'			, 	FALSE	);
define('TWIG_CACHE_FOLDER'			, 	'cache'	);
	
	/*
	 * KERNEL SETTINGS
	 * 
	 */

define('KERNEL_CONTROLLER_DIRECTORY', 	'controllers'	);


	/*
	 * VENDOR SETTINGS - MYSQL AND PHP CLASS
	 * 
	 */


define('DATABASE_NAME'		, MYSQL_DATABASE );
define('DATABASE_USER'		, MYSQL_USERNAME );
define('DATABASE_PASS'		, MYSQL_PASSWORD );
define('DATABASE_HOST'		, MYSQL_HOST );


	/*
	 * DROPZONE SETTINGS - MYSQL AND PHP CLASS
	 * 
	 */

define('DROPZONE_UPLOAD_FOLDER'		, 'PUBLIC_UPLOAD_FOLDER' );




?>

