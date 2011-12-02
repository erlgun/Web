<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kulquinox - <?php echo $current; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Kulquinox is a cultural festival in Sandvika,Norway.">
		<meta name="keywords" content="kulquinox, cosmic wind, cultural collaborations, festival sandvika, equinox, kulquinox english , culture bærum, culture festival sandvika">
<?php
# THIS SECTION CHOOSES RELATIVE URL OF styles.css
switch($folder) {
	case('0'):
?>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link type="image/x-icon" href="../images/topicon.gif" rel="shortcut icon">
<?php
	break;
	case('1'):
?>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
		<link type="image/x-icon" href="../../images/topicon.gif" rel="shortcut icon">
<?php
	break;
	case('2'):
?>
		<link rel="stylesheet" type="text/css" href="../../../css/styles.css">
		<link type="image/x-icon" href="../../../images/topicon.gif" rel="shortcut icon">
<?php			
	break;
	case('3'):
?>
		<link rel="stylesheet" type="text/css" href="../../../../css/styles.css">		
		<link type="image/x-icon" href="../../../../images/topicon.gif" rel="shortcut icon">
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
				<ul>
					<li>Next festival:</li>
					<li>March 23-24 </li>
				</ul>
				</div>
				<div id="header_menu">
					<ul class="header_menu_list">
							<li class="facebook"><a href="http://www.facebook.com/kulquinox">Like on Facebook</a></li>
							<li class="twitter"><a href="https://twitter.com/#!/Kulquinox">Follow on Twitter</a></li>
<?php
switch ($folder) {
	case('0'):
?>
							<li class="tickets"><a href="./pages/info_index.php#tickets">Tickets</a></li>
							<li class="header_menu_items"><a href="./pages/sponsors.php">Sponsors</a></li>
							<li class="header_menu_items"><a href="../index.php">Norsk</a></li>
<?php
	break;
	case('1'):
?>
							<li class="tickets"><a href="../pages/info_index.php#tickets">Tickets</a></li>
							<li class="header_menu_items"><a href="../pages/sponsors.php">Sponsors</a></li>
							<li class="header_menu_items"><a href="../../index.php">Norsk</a></li>
<?php
	break;
	case('2'):
?>
							<li class="tickets"><a href="../../pages/info_index.php#tickets">Tickets</a></li>
							<li class="header_menu_items"><a href="../../pages/sponsors.php">Sponsors</a></li>
							<li class="header_menu_items"><a href="../../../index.php">Norsk</a></li>
<?php
	break;
	case('3'):
?>
							<li class="tickets"><a href="../../../pages/info_index.php#tickets">Tickets</a></li>
							<li class="header_menu_items"><a href="../../../pages/sponsors.php">Sponsors</a></li>
							<li class="header_menu_items"><a href="../../../../index.php">Norsk</a></li>
<?php
	break;
}
?>
					</ul>
				</div>
			</div> <!-- END OF #header -->