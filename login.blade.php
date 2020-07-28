<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	@if(Session::has('msg'))
<div class="alert alert-danger alert-dismissible">

  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{Session::get('msg')}}</strong> 
</div>
@endif
<form action="lgck" method="post">
	@csrf

	<p>email</p>
	<p><input type="text" name="email"></p>

	<p>password</p>
	<p><input type="text" name="password"></p>





	<input type="submit" value="save">

</form>
</body>
</html>