<?php

class staticPagesController {
	// global $db;
	// global $mysqli;



	public function __construct(){
		// echo 'happy constructor method :) ';

	}

	public function showPage($title){
		global $DB;
		
		// $result = $mysqli->query("SELECT * FROM `staticpages` where id = 1");
		$alma = $DB->fetchAll("SELECT * FROM staticpages WHERE title = '" . $title . "'");

		// print_r($alma);
		return $alma;
	}

	public function topNavigation(){
		$baseURL = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	}

}