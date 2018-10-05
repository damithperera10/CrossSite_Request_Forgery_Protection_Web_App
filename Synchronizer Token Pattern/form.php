<!DOCTYPE html>
<html lang="en">

<head>
	<title>Synchronizer Token Pattern</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<script>
	$(function() {
		// Ajax call for invokes the endpoint for get CSRF token
		$.ajax({
			type: 'POST',
			url: 'get_csrf_token.php',
			success: function(result) {
				const res = JSON.parse(result);
				console.log('Token is ' + res.token);
				// Hidden field which has CSRF token value
				document.getElementById('hiddenToken').value = res.token;
			}
		});
	});
</script>

<body>

	<div class="jumbotron text-center">
		<h2>Synchronizer Token Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<h2>Successful logIn</h2>
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