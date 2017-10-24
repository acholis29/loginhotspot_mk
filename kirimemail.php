<body >
	<h1>Terima Kasih</h1>
<?php
$to      = 'cholis@diptasoft.com';
$subject = 'Register Hotspot ' . htmlspecialchars($_POST["t_nama"]);
$message = 'nama : ' . htmlspecialchars($_POST["t_nama"]) . 
			'<br/>durasi : ' . htmlspecialchars($_POST["t_durasi"]) .
			'<br/>hp : ' . htmlspecialchars($_POST["t_hp"]) .
			'<br/>catatan : ' . htmlspecialchars($_POST["txt_note"]) ;
$headers = 'From: ' . htmlspecialchars($_POST["t_email"]). "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
	'Content-type: text/html; charset=iso-8859-1';

mail($to, $subject, $message, $headers);


echo '<h3>Pendaftaran Sukses</h3>'
?>
	<p>kami akan segera kirim username dan password via sms atau email</p>

</body>