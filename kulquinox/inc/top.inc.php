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
		<a id="top"></a>
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
					<ul class="header_menu_list">
							<li class="facebook"><a href="http://www.facebook.com/kulquinox">Lik oss på Facebook</a></li>
							<li class="twitter"><a href="https://twitter.com/#!/Kulquinox">Følg oss på Twitter</a></li>
<?php
switch ($folder) {
	case('0'):
?>
							<li class="header_menu_items"><a href="./">Billetter</a></li>
							<li class="header_menu_items"><a href="./pages/sponsors.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="./en">English</a></li>
<?php
	break;
	case('1'):
?>
							<li class="header_menu_items"><a href="../">Billetter</a></li>
							<li class="header_menu_items"><a href="../pages/sponsors.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="../en">English</a></li>
<?php
	break;
	case('2'):
?>
							<li class="header_menu_items"><a href="../../">Billetter</a></li>
							<li class="header_menu_items"><a href="../../pages/sponsors.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="../../en">English</a></li>
<?php
	break;
	case('3'):
?>
							<li><a href="./../../">Billetter</a></li>
							<li><a href="../../../pages/sponsors.php">Samarbeidspartnere</a></li>
							<li><a href="../../../en">English</a></li>
<?php
	break;
}
?>
					</ul>
				</div>
			</div> <!-- END OF #header -->