			</div> <!-- END OF #content -->
			<div id="footer">
				<div id="copyright_and_footer_links">
					<div id="footer_links">	
						<?php
switch ($folder) {
	case('0'):
?>
						<p>
							<a href="./pages/sidekart.php">Sidekart</a> | <a href="./pages/kontakt.php">Kontakt Kulquinox</a>
						</p>
<?php
	break;
	case('1'):
?>
						<p>
							<a href="./sidekart.php">Sidekart</a> | <a href="./kontakt.php">Kontakt Kulquinox</a>
						</p>
<?php
	break;
	case('2'):
?>
						<p>
							<a href="../sidekart.php">Sidekart</a> | <a href="../kontakt.php">Kontakt Kulquinox</a>
						</p>
<?php
	break;
	case('3'):
?>
						<p>
							<a href="../../sidekart.php">Sidekart</a> | <a href="../../kontakt.php">Kontakt Kulquinox</a>
						</p>
<?php
	break;
}
?>

					</div>
					<div id="copyright">
						<p>
							Copyright &copy; <?php $date=getdate(); echo $date['year'];?> Kulquinox
						</p>	
					</div>
				</div>
				<div id="to_top">
					<p>
						<a href="#top">Til toppen av siden</a>
					</p>
				</div>
				<div id="validators">
					<p>
						<a href="http://validator.w3.org/check?uri=referer">Valider HTML5 med W3C</a> | 
						<a href="http://jigsaw.w3.org/css-validator/check/referer">Valider CSS med W3C</a>
					</p>
				</div>
			</div> <!-- END OF #footer -->
		</div> <!-- END OF #wrap -->
	</body>
</html>