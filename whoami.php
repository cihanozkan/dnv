<?php echo `whoami`;

// This will get the user the PHP process is running under on Linux machines:
$user = `whoami`;
	echo `whoami`;

chown(getcwd() . '/public_html/salatable/namazvakti'.$user->getId(), $user);
// And so on
?>
