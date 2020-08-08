<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>search2</title>
</head>
<body>
<form>
<input type="text" id="s" name="search"  onchange="search(this.value);"> 
<input type="submit" name="">
</form>


<script>


function search(s){

var fd = new FormData();
fd.append("search",s);

$.ajax({

url:'http://localhost/jeetlara/se',
method:'POST',
data:fd,
 processData: false,
 contentType: false,
 success:function(res){
    $('#s').html(res);
         }
        

});



}




</script>




</body>
</html>