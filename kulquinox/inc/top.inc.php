<!DOCTYPE html>
<html>
	<head>
		<title>Kulquinox - <?php echo $current; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
# THIS SECTION CHOOSES RELATIVE URL OF styles.css
switch($folder) {
	case('0'):
?>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
<?php
	break;
	case('1'):
?>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
<?php
	break;
	case('2'):
?>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
<?php			
	break;
	case('3'):
?>
		<link rel="stylesheet" type="text/css" href="../../../css/styles.css">		
<?php
	break;
}
?>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1 class="banner"><?php
# THIS SECTION CHOOSES RELATIVE URL OF index.php
switch ($folder) {
	case('0'):
?><a href="./index.php"><span></span>Kulquinox</a><?php
	break;
	case('1'):
?><a href="../index.php"><span></span>Kulquinox</a><?php
	break;
	case('2'):
?><a href="../../index.php"><span></span>Kulquinox</a><?php
	break;
	case('3'):
?><a href="../../../index.php"><span></span>Kulquinox</a><?php
	break;
}
?></h1>
			</div> <!-- END OF #header -->