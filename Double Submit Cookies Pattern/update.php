<?php 

if(isset($_POST['address'], $_POST['hiddenToken'])){

    $address   = $_POST['address'];
    $valid = false;
    $hiddenToken   = $_POST['hiddenToken'];

    if(isset($_COOKIE['tokenID'])){
        $tokenCookie = $_COOKIE['tokenID'];
        if($tokenCookie == $hiddenToken){
            $valid = true;
        }
    }

}

?>

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
</script>

<body>

	<div class="jumbotron text-center">
		<h2>Double Submit Cookies Pattern</h2>
	</div>

	<div class="container">
		<div class="row">

			<?php
                if($valid){
                    echo '<h2 style="color:green;">Update Success! </h2>';
                }else {
                    echo '<h2 style="color:red;">Update Fail! </h2>';
                }
            ?>

		</div>
	</div>

</body>

</html>