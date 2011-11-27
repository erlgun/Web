<?php
$current = 'Forsiden';
$folder = '0';
include './inc/top.inc.php';
include './inc/menu.inc.php';
?>

				<div id="news">
					<p class="front_page">
<?php
include './inc/news_front_page.inc.php';
?>
					</p>
				</div>
				<div id="program_additions">
					<p class="front_page">
<?php
include './inc/programadditions_front_page.php';
?>
					</p>
				</div>
<?php
include './inc/bottom.inc.php';
?>