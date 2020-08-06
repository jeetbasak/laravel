<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@foreach($i as $r)
<div style="width: 400px; height: 300px; background:url({{url('/bkimg/')}}/{{$r->bg}}); background-size: cover;">
<h1 style="text-align: center;color: white; padding-top: 80px">{{$r->text}}</h1>


</div>
@endforeach
</body>
</html>