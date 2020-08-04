<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>

	<a href="show" class="btn btn-warning">TABLE OF USERS</a>

	<form action="imgins" method="post" enctype="multipart/form-data">
		@csrf

<p>Image</p>
<p><input type="file" name="image"></p>

<p><input type="submit" name="save"></p>
	</form>

</body>
</html>