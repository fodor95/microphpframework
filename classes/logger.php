<?php 

class Logger{

 private $fileName;
 private $filePath;
 private $fileMode;
 private $file;
 
 public function __construct($fileName="Logger",$filePath="",$fileMode="a+",$timeZone="America/Monterrey"){
    date_default_timezone_set($timeZone);
    $date = date("Ymd");
    $this->fileName = $date.$fileName.".log";
    $this->filePath = $filePath;
    $this->file = fopen($this->filePath.$this->fileName,$fileMode);
    
    if($this->file==null){
      trigger_error("Error: No se pudo crear el archivo para registrar los errores", E_USER_ERROR);
    }else {
      fclose($this->file);
    }
 }
 
 public function write($type="error",$mensaje=""){
    $this->file = fopen($this->filePath.$this->fileName,"a+");
    
    if($this->file==null){
      trigger_error("Error: No se pudo abrir el archivo para registrar los errores", E_USER_ERROR);
    }else {
      fwrite($this->file,$type." ".$mensaje."\n");
      fclose($this->file);
    }
   }
}


/*
 * LOGGER USAGE
 * **HAS TO BE MODIFIED
 */


// $Logger = new Logger();
// $Logger->write("INFO: ","Iniciando logger de archivo tal");
// $Logger->write("ERROR: ","Ocurrio un error al realizar dicha accion");
// $Logger->write("INFO: ","Termino el logger");
