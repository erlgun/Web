<!DOCTYPE html>
<html lang="no">
	<head>
		<title>Kulquinox - <?php echo $current; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
# THIS SECTION CHOOSES RELATIVE URL OF styles.css
switch($folder) {
	case('0'):
?>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<link type="image/x-icon" href="./images/topicon.gif" rel="shortcut icon">
<?php
	break;
	case('1'):
?>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link type="image/x-icon" href="../images/topicon.gif" rel="shortcut icon">
<?php
	break;
	case('2'):
?>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
		<link type="image/x-icon" href="../../images/topicon.gif" rel="shortcut icon">
<?php			
	break;
	case('3'):
?>
		<link rel="stylesheet" type="text/css" href="../../../css/styles.css">		
		<link type="image/x-icon" href="../../../images/topicon.gif" rel="shortcut icon">
<?php
	break;
}
?>
		
		<meta name="description" content="Kulquinox er en kulturfestival i Sandvika for barn, unge, voksne og gamle">
		<meta name="keywords" content="kulkunox, culquinox, culqunox, kulquinox, culcuinox, culcynox, kulkynox, cosmic wind, cultural collaborations, festival sandvika, kulturfestival sandvika, kulturfestival, kulturjevndøgn, kultur sandvika, kultur bærum, festival bærum, culture festival sandvika, kilkinoks, kulkinox, kulkinoks">
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
				<ul>
					<li>Neste festival:</li>
					<li>23.-24. mars</li>
				</ul>
				</div>
				<div id="header_menu">
					<ul class="header_menu_list">
							<li class="facebook"><a href="http://www.facebook.com/kulquinox">Lik oss på Facebook</a></li>
							<li class="twitter"><a href="https://twitter.com/#!/Kulquinox">Følg oss på Twitter</a></li>
<?php
switch ($folder) {
	case('0'):
?>
							<li class="tickets"><a href="./pages/info.php#billetter">Billetter</a></li>
							<li class="header_menu_items"><a href="./pages/samarbeidspartnere.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="./en/index.php">English</a></li>
<?php
	break;
	case('1'):
?>
							<li class="tickets"><a href="../pages/info.php#billetter">Billetter</a></li>
							<li class="header_menu_items"><a href="../pages/samarbeidspartnere.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="../en/index.php">English</a></li>
<?php
	break;
	case('2'):
?>
							<li class="tickets"><a href="../../pages/info.php#billetter">Billetter</a></li>
							<li class="header_menu_items"><a href="../../pages/samarbeidspartnere.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="../../en/index.php">English</a></li>
<?php
	break;
	case('3'):
?>
							<li class="tickets"><a href="../../../pages/.php#billetter">Billetter</a></li>
							<li class="header_menu_items"><a href="../../../pages/samarbeidspartnere.php">Samarbeidspartnere</a></li>
							<li class="header_menu_items"><a href="../../../en/index.php">English</a></li>
<?php
	break;
}
?>
					</ul>
				</div>
			</div> <!-- END OF #header -->