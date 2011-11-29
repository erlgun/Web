<?php
$current = 'Contact';
$folder = '1';
include '../inc/top.inc.php';
include '../inc/menu.inc.php';
?>
<div id="sidebar">

</div>
<div id="inner_content">
	<h2>Kontakt Kulquinox via skjema</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>Navn:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Tlf.nr.:</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>E-postadresse:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Hva gjelder din forespørsel?</td>
				<td>
					<select size="1" name="whatContact">
						<option>Frivillig</option>
						<option>Presse</option>
						<option>Støtte</option>
						<option>Booking</option>
						<option>Annet</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Melding:</td>
				<td><textarea cols=42 rows=5 name="message"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Send inn" name="send"></td>
			</tr>
		</table>
	</form>
<?php
$_REQUEST['name']			=	$name;
$_REQUEST['phone']			=	$phone;
$_REQUEST['email']			=	$email;
$_REQUEST['whatContact']	=	$whatContact;
$_REQUEST['message']		=	$message;

if (isset($_REQUEST['send'])) {
	mail('nicolaig@broadpark.no', $whatContact, "Henvendelse fra ".$name."\n Avsenders e-post: ".$email."\n Avsenders tlf.nr.: ".$phone."\n\n".$message);
	echo 'Takk for at du tok kontakt med Kulquinox, vi vil svare deg så fort som mulig.';
}
?>

</div>
<?php
include '../inc/bottom.inc.php';
?>