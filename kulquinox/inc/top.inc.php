<!DOCTYPE html>
<html>
	<head>
		<title>Kulquinox - <?php echo $current; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">			
		<?php
		# her velges riktig stilark med relativ url
		switch ($current) {
			case('Forsiden'):
		?>		
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<?php
			break;
			case('Artister'):
			case('Film'):
			case('Teater'):
			case('Utstilling'):
			case('Tidsskjema'):
		?>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
		<?php
			break;
			default:
		?>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<?php			
			break;
		}
		?>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>
					<?php
					switch ($current) {
						case('Forsiden'):
					?>		
					<a href="./index.php"><span>Kulquinox</span></a>
					<?php
						break;
						case('Artister'):
						case('Film'):
						case('Teater'):
						case('Utstilling'):
						case('Tidsskjema'):
					?>
					<a href="../../index.php"><span>Kulquinox</span></a>
					<?php
						break;
						default:
					?>
					<a href="../index.php"><span>Kulquinox</span></a>
					<?php
						break;
					}
					?>
				</h1>
			</div> <!-- END OF #header -->
			<div id="main">