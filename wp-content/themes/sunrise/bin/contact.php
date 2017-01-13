
<?php

	require( '../../../../wp-load.php' );


	//validando los campos
	// if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	// 	$name = stripslashes(strip_tags($_POST['name']));
	// } else {$name = 'No name entered';}
	

if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
		$name = stripslashes(strip_tags($_POST['name']));
	} else {$name = 'No name entered';}

	if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
		$email = stripslashes(strip_tags($_POST['email']));
	} else {$email = 'No email entered';}

	if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
		$phone = stripslashes(strip_tags($_POST['phone']));
	} else {$phone = 'No phone entered';}

	if ((isset($_POST['comments'])) && (strlen(trim($_POST['comments'])) > 0)) {
		$comments = stripslashes(strip_tags($_POST['comments']));
	} else {$comments = 'No comments entered';}


	
	
	//generando el HTML
	ob_start();
		?>
<html>
<head>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; color: #000; font-size: 14px;">

<h2><?php bloginfo('name'); ?> Formulario de Contacto</h2>
<table width="750" border="0" cellspacing="2" cellpadding="6" style="font-family: Arial, Helvetica, sans-serif; color: #000; font-size: 14px;" class="table">
	<tr bgcolor="#eeffee">
		<td>Name:</td>
		<td><?=$name;?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?=$email;?></td>
	</tr>
	<tr bgcolor="#eeffee">
		<td>Telefono:</td>
		<td><?=$phone;?></td>
	</tr>
	<tr>
		<td>Comentarios:</td>
		<td><?=$comments;?></td>
	</tr>
	
</table>
</body>
</html>
<?php
$admin_email = get_option('admin_email');
$second_email = 'jjugo@sunrise.pe';
$third_email = 'sunrisepediatria@sunrise.pe';
$fourth_email = 'jnjugo@hotmail.com';
$fifth = 'lumacastro02@hotmail.com';
$test1 = 'jlcallalle@gmail.com';
$test2 = 'jhonny.0589@gmail.com';

//$info = 'info@stugra.com';


$body = ob_get_contents();
//$to = 'jlcallalle@gmail.com';
//$email = 'jlcallalle@gmail.com';
//$fromaddress = "jorge_luis_dt@hotmail.com";
$fromname = "Online Contact";

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->From     = $admin_email;
// $mail->FromName = "Contact Website Form";
$mail->FromName = "[CONTACTO ".get_option("blogname")."] Mensaje de ".$name;

$mail->AddAddress($admin_email,"Sounrise");
$mail->AddAddress($second_email, "Contacto");
$mail->AddAddress($third_email, "Contacto");
$mail->AddAddress($fourth_email, "Contacto");
$mail->AddAddress($fifth, "Contacto");
$mail->AddAddress($test1, "Contacto");
$mail->AddAddress($test2, "Contacto");

//$mail->AddAddress($info, "Contact3");

$mail->WordWrap = 50;
$mail->IsHTML(true);

// $mail->Subject  =  "Contact Website Form";
$mail->Subject  =  "[CONTACTO ".get_option("blogname")."] Mensaje de ".$name;
$mail->Body     =  $body;
$mail->AltBody  =  "This is the text-only body";

//header('location: ' . site_url('/gracias/'));
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header('location: ' . site_url('/gracias/'));
}

?>

