<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script>
			$(document).ready(function() {
				$("submit").click(function() {
					$temp = ($(this).attr("id")+".php");
					alert($temp)
					$.ajax({
						url:$temp
					}).done(function(data) {
						alert(data);
					});
				});
			});
		</script>
	</head>

	<body>
		<form action="index.php" method="get">
		<input type="text" style="width:300px;" name="url" />
		<input type="submit" value="Go" />
		</form>
		<br/>
		<input type="submit" value="Start Server" id="start_server" />
		<input type="submit" value="Start Playback" id="start_playback" />
	</body>
</html>