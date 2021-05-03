<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');


echo "********** <br> Creatinf data for add gogle leter to html<br> ********** <br> <br>";
$name='page';
$demo->CrtFtrBsc($name);
$table='letters';
$demo->CrtBscIn($table,'Leters to load',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('Oswald','google',$table, $name);
$demo->UpnCntIn('Sofia','google',$table, $name);
$demo->UpnCntIn('Wendy One','google',$table, $name);
$demo->UpnCntIn('Srisakdi','google',$table, $name);
$demo->UpnCntIn('Tangerine','www',$table, $name);

echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>