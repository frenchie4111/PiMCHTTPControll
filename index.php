<?php
echo derp;
passthru('omxplayer "http://frenchie:michael9@bluefile.org:9090/Sweet%20Thing%20(CD%20-%20MP3%20-%20V0)/01%20-%20Sweet%20Thing%20-%20Change%20of%20Seasons.mp3" < /tmp/cmd');
passthru('sudo echo . > /tmp/cmd');
?>

<form action="index.php" method="get">
<input type="text" style="width:300px;" name="url" />
<input type="submit" value="Go" />
</form>
