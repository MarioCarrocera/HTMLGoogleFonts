<?php
$base='ontime/';
include_once($base."OnTimetmp.php");
class html extends OnTime {
	private $page    ='none';	
	private $headfix =array();	
	private $headmeta =array();	
	private $headlink =array();	
	private $headletter =array();	
	private $errortaxt ='';	

function SetPage($CurPage){
	$this->page = $CurPage;
	$this->headfix[0] = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';     
	$this->headfix[1] = '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
	$this->headfix[2] = '<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />';
	$this->headlink["font-awesome.min"] = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';    
}
function SetMeta($definition){
    $read = $this->ShwCntIn($definition,$this->page );
	$this->headmeta['icon'] = '<link rel="shortcut icon" href="'.$read['icon'].'" />';
	$this->headmeta['head'] = "<title id='Description'>".$read['head']."</title>";
	$this->headmeta['description'] = '<meta name="description" content="'.$read['description'].'" />';
	$this->headmeta['keyword'] = '<meta name="keywords" content="'.$read['keyword'].'" />';
	$this->headmeta['author'] = '<meta name="author" content="'.$read['author'].'" />';	
}
function SetGoogle($definition){
    $read = $this->ShwCntIn($definition,$this->page );
 	foreach ($read as $clave => $valor) { if ($valor=='google')
		$this->headletter[$clave] = "<link href='https://fonts.googleapis.com/css?family=".$clave."' rel='stylesheet'>";
	}
}     
function Getheader(){
	$string = '<head>';
	foreach ($this->headfix as $clave=>$valor) $string.=$valor;
	foreach ($this->headmeta as $clave=>$valor) $string.=$valor;
	foreach ($this->headfix as $clave=>$valor) $string.=$valor;
	foreach ($this->headletter as $clave=>$valor) $string.=$valor;		
     
	$string .= '</head>';
	echo $string;
}

}



?>

			
			