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
		<label for="navn">Name:</label><br />
		<input type="text" name="name" id="navn" /><br />
		<label for="telefonnummer">Phone.nr.:</label><br />
		<input type="text" name="phone" id="telefonnummer" /><br />
		<label for="e-post">E-mail:</label><br />
		<input type="text" name="email" id="e-post"/><br />
		<label for="forespørsel">Select subject:</label><br />
		<select size="1" name="whatContact" id="forespørsel">
			<option>Volunteering</option>
			<option>Press</option>
			<option>Supporting</option>
			<option>Booking</option>
			<option>Other</option>
		</select><br />
		<label for="melding">Message:</label><br />
		<textarea cols=42 rows=5 name="message" id="melding"></textarea><br />
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
	die('<br />You did not fill out the form completely, please go back and fill out the form again.');
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