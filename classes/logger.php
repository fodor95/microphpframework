<?php 

class Logger {

	private $fileName;
	private $filePath;
	private $fileMode;
	private $file;
 
	public function __construct($fileName = "Logger",
								$filePath = "",
								$fileMode = "a+",
								$timeZone = "Europe/Athens"
								){
		
		date_default_timezone_set($timeZone);
		
		$date = date("Ymd");
		$this->fileName = $date . $fileName . ".log";
		$this->filePath = $filePath;
		$this->file 	= fopen($this->filePath . $this->fileName, $fileMode);
		    
		if($this->file == null)
			trigger_error("File does not exist", E_USER_ERROR);
			else 
				fclose($this->file);
		
	}
	 
	public function write($type="error", $message = ""){
		$this->file = fopen($this->filePath . $this->fileName, "a+");
		   
		if($this->file == null){
			trigger_error("File does not exist", E_USER_ERROR);
			}
			else 
			{
				fwrite($this->file, $type . " " . $message  . "\n");
				fclose($this->file);
			}
	}
}


/*
 * LOGGER USAGE
 * 
 */
// $Logger = new Logger();
// $Logger->write("INFO: ","-");
// $Logger->write("ERROR: ","-");
// $Logger->write("INFO: ","-");
