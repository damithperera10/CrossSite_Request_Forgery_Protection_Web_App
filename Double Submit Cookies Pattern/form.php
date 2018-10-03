<!DOCTYPE html>
<html lang="en">

<head>
	<title>Double Submit Cookies Pattern</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<script>
	$(function() {
		// reads the CSRF token cookie value
		const token = getCookie('tokenID');
		console.log(token);
		// Add a new hidden field to receive CSRF token
		document.getElementById('hiddenToken').value = token;
	});

	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
</script>

<body>

	<div class="jumbotron text-center">
		<h2>Double Submit Cookies Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<h2>Successfully Log in</h2>
			<h3>Update the address</h3>

			<form action="update.php" method="post">

				<div class="form-group">
					<input type="text" class="form-control" name="address" id="address" value="Sri Lankan Institute of Information Technology">
				</div>

				<div class="form-group">
					<input type="hidden" class="form-control" id="hiddenToken" name="hiddenToken">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>

			</form>

		</div>
	</div>

</body>

</html>