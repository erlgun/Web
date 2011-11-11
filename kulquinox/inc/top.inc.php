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
		<div id="outerwrapper">
			<div id="header">
				<?php
				switch ($current) {
					case('Forsiden'):
				?>		
				<h1><a href="./index.php">KULQUINOX</a></h1>
				<?php
					break;
					case('Artister'):
					case('Film'):
					case('Teater'):
					case('Utstilling'):
					case('Tidsskjema'):
				?>
				<h1><a href="../../index.php">KULQUINOX</a></h1>
			<?php
				break;
				default:
			?>
				<h1><a href="../index.php">KULQUINOX</a></h1>
			<?php
				break;
			}
			?>
			</div> <!-- END OF #header -->
			<div id="innerwrapper">