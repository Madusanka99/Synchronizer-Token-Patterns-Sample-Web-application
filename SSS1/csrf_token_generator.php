<?php

	session_start();
	$myfile = fopen("CSFR_Tokens.txt", "w") or die("Unable to open file!");
	$_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
	$txt = $_SESSION['csrf_token'].",";
	fwrite($myfile, $txt);

	$session_id = session_id();
	setcookie('cookieName_sessionID',$session_id,time()+60*60*24*365,'/');
	$txt1 = $session_id."\n";
	fwrite($myfile, $txt1);

	fclose($myfile);

	echo $_SESSION['csrf_token'];

?>