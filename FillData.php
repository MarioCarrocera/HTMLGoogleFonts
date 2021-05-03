<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";$demo->Connect('admin','OT2021Free');

echo "**********+++++++++++ <br> Creating Basic content on page, screen container and fill data  <br> **********+++++++++++ <br> <br>";


$name='page';
$demo->CrtFtrBsc($name);
$table='screen';
$demo->CrtBscIn($table,'Related data on screen',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('icon','otfavicon.ico',$table, $name);
$demo->UpnCntIn('head','On Time',$table, $name);
$demo->UpnCntIn('description','Mundos Genesys, content manger',$table, $name);
$demo->UpnCntIn('keyword','cm,wiki,blog,pages,user,free, comertial',$table, $name);
$demo->UpnCntIn('author','Mundos Genesys',$table, $name);


echo "**********+++++++++++ <br> Done<br> **********+++++++++++ <br> <br>";
?>