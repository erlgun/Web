<?php
$current = 'Contact';
$folder = '1';
include '../inc/top.inc.php';
include '../inc/menu.inc.php';
?>

				<div id="sidebar">
					<ul>
						<li><strong>E-mail:</strong></li>
						<li><a href="mailto:festival@cosmicwind.org?subject=Inquiry%20from%20kulquinox.no">festival@cosmicwind.org</a></li>	
						<li><strong>Phone:</strong></li>
						<li>+ 47 400 48 413</li>
					</ul>
				</div>
				<div id="inner_content">
					<h2>Contact Kulquinox by form</h2>
					<form action="#top" method="post">
						<label for="name">Name:</label><br />
						<input type="text" name="name" id="name" /><br />
						<label for="phone">Phone.nr.:</label><br />
						<input type="text" name="phone" id="phone" /><br />
						<label for="e-mail">E-mail:</label><br />
						<input type="text" name="email" id="e-mail"/><br />
						<label for="inquiry">Select subject:</label><br />
						<select size="1" name="whatContact" id="inquiry">
							<option>Volunteering</option>
							<option>Press</option>
							<option>Support</option>
							<option>Booking</option>
							<option>Other</option>
						</select><br />
						<label for="message">Message:</label><br />
						<textarea cols=42 rows=5 name="message" id="message"></textarea><br />
						<input type="submit" value="Send " name="send">
					</form>
<?php
$name			=	$_REQUEST['name'];
$phone			=	$_REQUEST['phone'];
$email			=	$_REQUEST['email'];
$whatContact	=	$_REQUEST['whatContact'];
$message		=	$_REQUEST['message'];

if (isset($_REQUEST['send'])) {
	if ((!$name) or (!$phone) or (!$email) or (!$whatContact) or (!$message)) {
		die('<br /><p>You did not fill out the form completely, please go back and fill out the form again.</p></div><!-- END OF #inner_content -->

					</div> <!-- END OF #content -->
					<div id="footer">
						<div id="copyright_and_footer_links">
							<div id="footer_links">	
														<p>
									<a href="./sitemap.php">Sitemap</a> | <a href="./contact.php">Contact Kulquinox</a>
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
								<a href="#top">To the top</a>
							</p>
						</div>
						<div id="validators">
							<p>
								<a href="http://validator.w3.org/check?uri=referer">Validate in HTML5 with W3C</a> | 
								<a href="http://jigsaw.w3.org/css-validator/check/referer">Validate in CSS with W3C</a>

							</p>
						</div>
					</div> <!-- END OF #footer -->
				</div> <!-- END OF #wrap -->
			</body>
		</html>'); // Quick and dirty solution to the problem where die stops the php-script. An undynamic fix that works temporarily. I will now be able to go to sleep...
		} else {
		mail('nicolaig@broadpark.no', 'Kulquinox.no skjema angående '.$whatContact, "Henvendelse fra ".$name."\n Avsenders e-post: ".$email."\n Avsenders tlf.nr.: ".$phone."\n\n".$message);
		echo 'Thank you for contacting Kulquinox, we will reply as soon as possible.';
	}
}
?>
				</div><!-- END OF #inner_content -->
<?php
include '../inc/bottom.inc.php';
?>