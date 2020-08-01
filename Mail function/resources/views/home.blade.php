<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="1stpage" method="post">
  	@csrf
	<p>name</p>
	<p><input type="text" name="name"></p>

	<p>email</p>
	<p><input type="text" name="email"></p>

	<p></p>
	<input type="submit" name="submit">
  </form>
</body>
</html>