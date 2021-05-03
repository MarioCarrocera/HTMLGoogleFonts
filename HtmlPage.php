<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTimetmp.php");
$Demo=new OnTime();
$meta = $Demo->ShwCntIn('screen',"page");
$google = $Demo->ShwCntIn('letters',"page");

?>

<!DOCTYPE html>
<html>
	<head>
		<title id='Description'><?php echo $meta['head']; ?></title>
		<link rel="shortcut icon" href="<?php echo $meta['icon']; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="<?php echo $meta['description']; ?>" />
		<meta name="keywords" content="<?php echo $meta['keyword']; ?>" />
		<meta name="author" content="<?php echo $meta['author']; ?>" />	
<?php foreach ($google as $clave => $valor) { if ($valor=='google') { ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo $clave; ?>' rel='stylesheet'>
<?php }} ?>



	</head>
<body>

<?php foreach ($google as $clave => $valor) { if ($valor=='google') { ?>
		<p style=<?php echo '"font-family:'.$clave ; ?>">This is a paragraph <?php echo $clave; ?>.</p>
<?php }} 
include_once('Classcommon.php');
$license = new CCLicense(3,2,1);
echo '<br>'.$license->logo . '</br>'; 

echo $license->url; 

?>

</body>
	
</html> 
			
			