<?php
function send($command) {
	$err = '';
	exec('pgrep omxplayer', $pids);
	if ( is_writable("player/cmd") ) {
		if ( $fifo = fopen("player/cmd", 'w') ) {
			stream_set_blocking($fifo, false);
			fwrite($fifo, $command);
			fclose($fifo);
			if ($command == 'q') {
				sleep (1);
				@unlink(FIFO);
				$out = 'stopped';
			}
		}
	}
	echo "COMMAND: " . $command . "<br/>";
}
if(isset($_REQUEST["cmd"]))
{
	send( $_REQUEST["cmd"] );
}
?>
