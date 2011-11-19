<div id="nyttig_infomenu">
	<ul class="nyttig_infomenuitems">
	<?php
	switch ($current) {
		case('Mat'):
	?>
			<li class="active button"><a href="../nyttig_info/mat.php">Mat</a></li>
			<li class="button"><a href="../nyttig_info/kart.php">Kart</a></li>
			<li class="button"><a href="../nyttig_info/rullestol.php">Rullestol</a></li>
	<?php
		break;
		case('Kart'):
	?>
			<li class="button"><a href="../nyttig_info/mat.php">Mat</a></li>
			<li class="active button"><a href="../nyttig_info/kart.php">Kart</a></li>
			<li class="button"><a href="../nyttig_info/rullestol.php">Rullestol</a></li>
	<?php
		break;
		case('Rullestol'):
	?>
			<li class="button"><a href="../nyttig_info/mat.php">Mat</a></li>
			<li class="button"><a href="../nyttig_info/kart.php">Kart</a></li>
			<li class="active button"><a href="../nyttig_info/rullestol.php">Rullestol</a></li>
			<?php
		break;
		default:
	?>
			<li class="button"><a href="./nyttig_info/mat.php">Mat</a></li>
			<li class="button"><a href="./nyttig_info/kart.php">Kart</a></li>
			<li class="button"><a href="./nyttig_info/rullestol.php">Rullestol</a></li>
	<?php
		break;
	}
	?>
	</ul>
</div> <!-- END OF #nyttig_infomenu -->