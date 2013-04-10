<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

function updateList()
{
$("#list").text("");
$.post("dat.txt", function(data) {
	var lines = data.split('\n');
	for(var i = 0; i < lines.length; i++)
	{
		if(lines[i] != "")
		{
			$("#list").append(function() {
				return lines[i] + "<br/>";
			});
		}
	}
});
}
function addButtons()
{

}

$(document).ready(function() {
$("#go").click(function() {
	$.post("add.php", {url:$("#url").val()+"\n"}, function(data) {
		updateList();
	});
});
});

</script>
</head>

<body>
<form action="index.php" method="post">
<input type="text" id="url" style="width:400px;" /><input type="button" id="go" value="Add" />
</form>

<div id="list">
<?php
$file = fopen("dat.txt","r");
while(!feof($file))
  {
	$line = fgets($file);
	if($line != "" && $line != " " && $line != "\n")
	{
	  echo "<a id=''>" . $line . "</a><br/>";
	}
  }
fclose($file);
?>
</div>
<br /> 
</body>
</html>

