<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if(count($errors)>0)

	@foreach($errors->all() as $error)

<p style="background-color: red">{{$error}}</p>


	@endforeach

	@endif

<form action="submit" method="post">
	@csrf
	<p>name</p>
	<p><input type="text" name="name"></p>

	<p>email</p>
	<p><input type="text" name="email"></p>
	<p>password</p>
	<p><input type="text" name="password"></p>

	<p>subject</p>
	<p><input type="checkbox" name="subject[]" value="c">C</p>
<p><input type="checkbox" name="subject[]" value="c++">C++</p>
<p><input type="checkbox" name="subject[]" value="java">java</p>

<p>Gender</p>
<p><input type="radio" name="gender" value="male">MALE</p>
<p><input type="radio" name="gender" value="female">FEMALE</p>
<p><input type="radio" name="gender" value="others">others</p>





	<input type="submit" value="save">

</form>
</body>
</html>