<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>CURE ME</title>
</head>
<body>

	<?php include 'navbar.php'?>

	<form action="">
	<div class="mb-3">
    <label for="pwd" class="form-label">Username:</label>
    <input type="text" class="form-control" name="user">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>
  
  		<label for="comment">Comments:</label>
		<textarea class="form-control" rows="5" id="comment" name="text"></textarea><br><br>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>





</body>
</html>