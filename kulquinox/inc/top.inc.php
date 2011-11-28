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
				<div id="header_banner">
					<h1 class="banner"><?php
	# THIS SECTION CHOOSES RELATIVE URL OF index.php
	switch ($folder) {
		case('0'):
	?><a href="./index.php">KULQUINOX</a><?php
		break;
		case('1'):
	?><a href="../index.php">KULQUINOX</a><?php
		break;
		case('2'):
	?><a href="../../index.php">KULQUINOX</a><?php
		break;
		case('3'):
	?><a href="../../../index.php">KULQUINOX</a><?php
		break;
	}
	?></h1>
				</div>
				
				<div id="header_menu">
					<div id="face">
						<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.kulquinox.no">
						</iframe>
					</div>
					
					<ul class="header_menu_items">
<?php
switch ($folder) {
	case('0'):
?>
							<li><a href="./">Samarbeidspartnere</a></li>
							<li><a href="./">English</a></li>
<?php
	break;
	case('1'):
?>
							<li><a href="../">Samarabeidspartnere</a></li>
							<li><a href="../">English</a></li>
<?php
	break;
	case('2'):
?>
							<li><a href="../../">Samarbeidspartnere</a></li>
							<li><a href="../../">English</a></li>
<?php
	break;
	case('3'):
?>
							<li><a href="../../../">Samarbeidspartnere</a></li>
							<li><a href="../../../">English</a></li>
<?php
	break;
}
?>
					</ul>
				</div>
			</div> <!-- END OF #header -->