<?php
$current = 'Contact';
$folder = '1';
include '../inc/top.inc.php';
include '../inc/menu.inc.php';
?>
<div id="sidebar">

</div>
<div id="inner_content">
	<h2>Contact Kulquinox by form</h2>
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
	die('<br />Du fylte ikke ut skjema fullstendig, vær så snill og gå tilbake og fyll ut igjen.');
	} else {
		mail('nicolaig@broadpark.no', 'Kulquinox.no skjema angående '.$whatContact, "Henvendelse fra ".$name."\n Avsenders e-post: ".$email."\n Avsenders tlf.nr.: ".$phone."\n\n".$message);
		echo 'Takk for at du tok kontakt med Kulquinox, vi vil svare deg så fort som mulig.';
	}
	
}
?>

</div><!-- END OF #inner_content -->
<?php
include '../inc/bottom.inc.php';
?>