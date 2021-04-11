<?php namespace kozlovskaya;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }

    public static function log(string $str){
        self::Instance()->_log($str);
	}
    
    public function _write(){
        
        $d = new DateTime();
$filename = "log/".$d->format('d.m.Y_T_H.i.s.u').".log";

if(!(is_dir("log"))){
mkdir("log", 0777, true);
}

$logfile = "";

 for ($i = 0; $i < sizeof($this->log); $i++) {
            echo $this->log[$i]."\n";
			$logfile .= $value."\r\n";
        }
        
    file_put_contents($filename, $logfile, FILE_APPEND);


}
    
    public static function write(){
       
    }


}

?>