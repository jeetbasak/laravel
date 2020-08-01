<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>SEND MAILS</h1>
<br>

<form action="send" method="post">
	@csrf
	TO: <input type="text" name="to">

	TYPE MESSAGE: <textarea name="message"  ></textarea>
	
<input type="submit" value="send">



</form>


</body>
</html>