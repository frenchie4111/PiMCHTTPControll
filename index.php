<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style>
		#console
		{
			border: 1px black solid;
			padding: 5px;
			margin: 5px 5px 5px 5px;
		}
	</style>
		<script>
			function log( $message ) {
				$("#console").append($message + "<br/>");
			}


			$(document).ready(function() {
				$("#start_playback").click(function() {
					$.ajax({
						url:"control.php?cmd=."
					}).done(function(data) {
						log( data );
					});
				});
				$("#pause_playback").click(function() {
					$.ajax({
						url:"control.php?cmd=p"
					}).done(function(data) {
						log( data );
					});
				});
				$("#end_playback").click(function() {
					$.ajax({
						url:"control.php?cmd=q"
					}).done(function(data) {
						log( data );
					});
				});
				$("#submit").click(function() {
					$new_url = "start_server.php"
					if( $("#url").val() ) {
						$new_url += "?url=" + $("#url").val();
					}
					log( $new_url );
					$.ajax({
						url:$new_url
					}).done(function(data) {
						log( data );
					});
				});
				$("#list").click(function() {
					$.ajax({
						url:"list.php"
					}).done(function(data) {
						log( data );
					});
				});
				var printed_lines = 0;
				$("#geturl").click(function() {
					$.ajax({
						url:"geturl.php"
					}).done(function(data) {
						var lines = data.split('\n');
						for(var i = 0; i < lines.length; i++)
						{
							if(lines[i] != "")
							{
								printed_lines++;
								console.log("line" + printed_lines);
								$("#console").append(function() {
									return $("<a id='line' href='#' >" + lines[i] + " </a>").click(function(){
										$("#url").val(($(this).text()));
									});
								});
							}
						}
					});
				});
			});
		</script>
	</head>

	<body>
		<form>
		<input type="text" style="width:300px;" name="url" id="url" />
		<input type="button" value="Go" id="submit" />
		</form>
		<input type="submit" value="Play/Pause" id="pause_playback" /><br/>

		<input type="submit" value="Start Playback" id="start_playback" />
		<input type="submit" value="Stop Playback" id="end_playback" /><br/>

		<input type="submit" value="List" id="list" />
		<input type="submit" value="Get Url List" id="geturl" />

		<div id="console">
			Console Out:<br/>
		</div>
	</body>
</html>
