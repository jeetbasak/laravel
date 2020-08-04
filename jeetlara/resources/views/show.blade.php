<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 


</head>


<style type="text/css">
  
#example_length{
  display: none !important;
}



</style>
<body>

<div class="container">
  <h2>Table created by {{Session::get('uname')}}</h2>
<form action="search" method="post">
  @csrf
  <p>
  <input type="text" name="search" placeholder="enter name or email">

<input type="submit" class="btn btn-warning" value="search"></p>
</form>

<p><a href="logout"class="btn btn-danger" style="float: right;">LOGOUT</a></p>

  <table class="table table-condensed" id="example">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
         <th>SUBJECT</th>
        <th>GENDER</th>
        <th>CREATED TIME</th>
        <th>DETAILS</th>
        <th>DELETE</th>

      </tr>
    </thead>


    <tbody>
      @foreach($row as $r)
      <tr>
        <td>{{$r->name}}</td>
        <td>{{$r->email}}</td>
        <td>{{$r->subject}}</td>
        <td>{{$r->gender}}</td>
        <td>{{$r->created_at}}</td>

        <td><a href="details/{{$r->id}}"  class="btn btn-primary" >DETAILS</a></td>
        
        <td><a href="delete/{{$r->id}}"  class="btn btn-danger" >DELETE</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
  
</div>

<script type="text/javascript">
  
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers",
        "pageLength":3
    } );
} );


</script>

</body>
</html>
