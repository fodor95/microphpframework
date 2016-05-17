<?php

class adaugaSosController {
	// global $db;
	// global $mysqli;



	public function __construct(){
		// echo 'happy constructor method :) ';

	}

	// public function indexAction($title){
	// 	global $DB;
		
		
	// 	return $alma;
	// }

	// public function topNavigation(){
	// 	$baseURL = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	// }

	public function getLocations($searchFor){
		global $DB;


		$locations = $DB->fetchAll("SELECT * FROM account_city WHERE name LIKE '" . $searchFor . "%' LIMIT 5");
		

		// foreach ($locations as $key => $value) {
		// 	$judetul = $DB->fetch("SELECT * FROM account_county WHERE id = " . $key['county_id']);
		// 	print_r($judetul);
		// }

		// print_r($alma);

		return $locations;
	}

	private function escapeSearchForString($string){

		// ESCAPE HERE THE $STRING STRING YOU FUCK

		$string = htmlspecialchars($string, ENT_QUOTES);

		return $string;
	}

	public function uploadImages(){
		global $_FILES;

		$ds          = DIRECTORY_SEPARATOR;  //1

		$storeFolder = 'uploads';   //2

		if (!empty($_FILES)) {

		$tempFile = $_FILES['file']['tmp_name'];          //3             

		$targetPath = dirname( __FILE__ ) . $ds . '..' . $ds . DROPZONE_UPLOAD_FOLDER . $ds;  //4

		$targetFile =  $targetPath. $_FILES['file']['name'];  //5

		move_uploaded_file($tempFile,$targetFile); //6

		return $_FILES['file']['name'];
		
		}

	}

}