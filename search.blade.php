<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>search table created by JEET</h2>
<form action="search" method="post">
  @csrf
  <p>
  <input type="text" name="search" placeholder="enter name or email">

<input type="submit" class="btn btn-warning" value="search"></p>
</form>


  <table class="table table-condensed">
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
        <td><a href="delete/{{$r->id}}"  class="btn btn-danger" >DELETE</a></td>
        <td><a href="details/{{$r->id}}"  class="btn btn-danger" >DETAILS</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
