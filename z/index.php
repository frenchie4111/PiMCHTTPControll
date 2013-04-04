<html>
<body>
<form action="index.php" method="post">
<textarea rows="50" cols="50" name="note">
<?php
if (isset($_POST["note"]))
{
	$writeFile = fopen("dat.txt","w");
	$newStat = $_POST["note"];
	fwrite($writeFile,$newStat);
	fclose($writeFile);
}

$file = fopen("dat.txt","r");
while(!feof($file))
  {
  echo fgets($file);
  }
fclose($file);
?>
</textarea>
<br /> 
<input type="submit" value="Save" />
</form>
</body>
</html>

