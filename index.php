<?php

use kozlovskaya\kozlovskayaException;
use kozlovskaya\QuEquation;
use kozlovskaya\MyLog;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "kozlovskaya/MyLog.php";
include "kozlovskaya/Equation.php";
include "kozlovskaya/QuEquation.php";
include "kozlovskaya/kozlovskayaException.php";

ini_set("display_errors", 1);
error_reporting(-1);

$b = new QuEquation();

try {
	$version = file_get_contents("version");
	MyLog::log("Версия программы ".$version);

$values = array();

    for ($i = 1; $i<4; $i++){
    echo "Введите " .$i."аргумент : ";

    $values[] = readline();
    }

 $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

MyLog::log("Введено уравнение ".$va. "x^2 +  ".$vb."x + ".$vc);
    $x = $b->l_solve($va, $vb, $vc);

$str = implode(", ", $x);
    MyLog::log("Корни уравнения: ".$str);
}
catch(kozlovskayaException $e){
    MyLog::log($e->getMessage());
}
MyLog::write();

?> 