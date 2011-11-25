

				<div id="artist_menu">
					<h3>Bildegallerier</h3>
					<ul class="artist_menu_items">
<?php
switch($gallery){
	case ('Høst 2011'):
?>
						<li class="event_list active_event"><a href="../../pages/galleri/host_2011.php">Høst 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2011.php">Vår 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/host_2010.php">Høst 2010</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2010.php">Vår 2010</a></li>

<?php
	break;
	case ('Vår 2011'):
?>
						<li class="event_list"><a href="../../pages/galleri/host_2011.php">Høst 2011</a></li>
						<li class="event_list active_event"><a href="../../pages/galleri/var_2011.php">Vår 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/host_2010.php">Høst 2010</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2010.php">Vår 2010</a></li>

<?php
	break;
	case ('Høst 2010'):
?>
						<li class="event_list"><a href="../../pages/galleri/host_2011.php">Høst 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2011.php">Vår 2011</a></li>
						<li class="event_list active_event"><a href="../pages/galleri/host_2010.php">Høst 2010</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2010.php">Vår 2010</a></li>

<?php
	break;
	case ('Vår 2010'):
?>
						<li class="event_list"><a href="../../pages/galleri/host_2011.php">Høst 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/var_2011.php">Vår 2011</a></li>
						<li class="event_list"><a href="../../pages/galleri/host_2010.php">Høst 2010</a></li>
						<li class="event_list active_event"><a href="../../pages/galleri/var_2010.php">Vår 2010</a></li>



<?php
	break;
	default:
?>
						<li class="event_list"><a href="../pages/galleri/host_2011.php">Høst 2011</a></li>
						<li class="event_list"><a href="../pages/galleri/var_2011.php">Vår 2011</a></li>
						<li class="event_list"><a href="../pages/galleri/host_2010.php">Høst 2010</a></li>
						<li class="event_list active_event"><a href="../pages/galleri/var_2010.php">Vår 2010</a></li>
<?php
}
?>
					</ul>
				</div>
				<div id="artist_info">