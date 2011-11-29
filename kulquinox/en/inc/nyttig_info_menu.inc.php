<div id="nyttig_infomenu">
	<ul class="nyttig_infomenuitems">
	<?php
	switch ($current) {
		case('Food'):
	?>
			<li class="active button"><a href="../nyttig_info/mat.php">Food</a></li>
			<li class="button"><a href="../nyttig_info/kart.php">Map</a></li>
			<li class="button"><a href="../nyttig_info/rullestol.php">Wheelchair</a></li>
	<?php
		break;
		case('Map'):
	?>
			<li class="button"><a href="../nyttig_info/mat.php">Food</a></li>
			<li class="active button"><a href="../nyttig_info/kart.php">Map</a></li>
			<li class="button"><a href="../nyttig_info/rullestol.php">Wheelchair</a></li>
	<?php
		break;
		case('Wheelchair'):
	?>
			<li class="button"><a href="../nyttig_info/mat.php">Food</a></li>
			<li class="button"><a href="../nyttig_info/kart.php">Map</a></li>
			<li class="active button"><a href="../nyttig_info/rullestol.php">Wheelchair</a></li>
			<?php
		break;
		default:
	?>
			<li class="button"><a href="./nyttig_info/mat.php">Food</a></li>
			<li class="button"><a href="./nyttig_info/kart.php">Map</a></li>
			<li class="button"><a href="./nyttig_info/rullestol.php">Wheelchair</a></li>
	<?php
		break;
	}
	?>
	</ul>
</div> <!-- END OF #nyttig_infomenu -->