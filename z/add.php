<?php
if (isset($_POST["url"]))
{
        $writeFile = fopen("dat.txt","a");
        $newStat = $_POST["url"];
        fwrite($writeFile,$newStat);
        fclose($writeFile);
	echo "Added: " . $_POST["url"];
}
?>
