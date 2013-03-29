<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script>
			$(document).ready(function() {
				$("#start_server").click(function() {
					$.ajax({
						url:"start_server.php"
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