<?php
	echo "COMMAND: Start Server";
	$file = "http://mikelyons.org/external/cos.mp3";
	if( isset( $_GET['url']  ) )
	{
		$file = $_GET['url'];
	}
	echo shell_exec("omxplayer -o hdmi " . str_replace(" ", "%20", $file) . " < " . getcwd() . "/player/cmd");
?>
