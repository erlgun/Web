<?php
$current = 'Kontakt';
$folder = '1';
include '../inc/top.inc.php';
include '../inc/menu.inc.php';
?>

				<div id="sidebar">
				<ul>
					<li><strong>E-post:</strong></li>
					<li><a href="mailto:festival@cosmicwind.org?subject=Henvendelse$20fra$20kulquinox.no">festival@cosmicwind.org</a></li>	
					<li><strong>Telefon:</strong></li>
					<li>+ 47 400 48 413</li>
				</ul>
				</div>
				<div id="inner_content">
					<h2>Kontakt Kulquinox via skjema</h2>
					<form action="#top" method="post">
						<label for="navn">Navn:</label><br />
						<input type="text" name="name" id="navn" /><br />
						<label for="telefonnummer">Tlf.nr.:</label><br />
						<input type="text" name="phone" id="telefonnummer" /><br />
						<label for="e-post">E-postadresse:</label><br />
						<input type="text" name="email" id="e-post"/><br />
						<label for="forespørsel">Hva gjelder din forespørsel?</label><br />
						<select size="1" name="whatContact" id="forespørsel">
							<option>Frivillig</option>
							<option>Presse</option>
							<option>Støtte</option>
							<option>Booking</option>
							<option>Annet</option>
						</select><br />
						<label for="melding">Melding:</label><br />
						<textarea cols=42 rows=5 name="message" id="melding"></textarea><br />
						<input type="submit" value="Send inn" name="send">
					</form>
<?php
$name			=	$_REQUEST['name'];
$phone			=	$_REQUEST['phone'];
$email			=	$_REQUEST['email'];
$whatContact	=	$_REQUEST['whatContact'];
$message		=	$_REQUEST['message'];

if (isset($_REQUEST['send'])) {
	if ((!$name) or (!$phone) or (!$email) or (!$whatContact) or (!$message)) {
	die('<br /><p>Du fylte ikke ut skjema fullstendig, vennligst se at alle feltene er fylt ut før du sender inn skjemaet.</p>					</div> <!-- END OF #inner_content -->
					</div> <!-- END OF #content -->
					<div id="footer">
						<div id="copyright_and_footer_links">
							<div id="footer_links">	
								<p>
									<a href="./sidekart.php">Sidekart</a> | <a href="./kontakt.php">Kontakt Kulquinox</a>

								</p>

							</div>
							<div id="copyright">
								<p>
									Copyright &copy; 2011 Kulquinox
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
		</html>'); // Quick and dirty solution to the problem where die stops the php-script. An undynamic fix that works temporarily. I will now be able to go to sleep...
	} else {
		mail('nicolaig@broadpark.no', 'Kulquinox.no skjema angående '.$whatContact, "Henvendelse fra ".$name."\n Avsenders e-post: ".$email."\n Avsenders tlf.nr.: ".$phone."\n\n".$message);
		echo 'Takk for at du tok kontakt med Kulquinox, vi vil svare deg så fort som mulig.';
	}
	
}
?>
				</div> <!-- END OF #inner_content -->
<?php
include '../inc/bottom.inc.php';
?>