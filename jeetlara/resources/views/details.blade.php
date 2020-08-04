<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
	<title></title>
</head> 
<body>



    <div class="container ">
       <div class="row">
         <div class="col-10 mx-auto">
          <div class="row">



              @foreach($row as $r)

             <div class="col-md-3 ">
             
              <div class="mt-5">
               <img src="{{url('/')}}/pic/{{$r->image}}" style="width: 100px; cursor: pointer;" data-toggle="modal" data-target="#myModal{{$r->id}}"> 
             
              </div>

            </div> 

<div class="modal" id="myModal{{$r->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
         <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
         <th>SUBJECT</th>
        <th>GENDER</th>
        <th>CREATED TIME</th>
       
      </tr>
    </thead>


    <tbody>
        @foreach($row1 as $r1)
      <tr>
        <td>{{$r1->name}}</td>
        <td>{{$r1->email}}</td>
        <td>{{$r1->subject}}</td>
        <td>{{$r1->gender}}</td>
        <td>{{$r1->created_at}}</td>

        
      </tr>
     @endforeach
      </tbody>
  </table>
</div>
</div>
            <?php echo $r->id  ?>
        <img src="{{url('/')}}/pic/{{$r->image}}" style="width: 100%"> 


<?php


 $cnt = DB::table('likes')->where("picid","=",$r->id)->where("myid","=",$uid)->get();
//print_r($cnt);
 $cn=count($cnt);


?>
        <form action="http://localhost/jeetlara/like" id="lk{{$r->id}}" method="post">
          @csrf
          
            <input type="hidden" name="id" value={{$r->id}}>  <!-- chobir id from gallery table -->
         <p>
           <span id="btn{{$r->id}}"> 
            @if($cn==0) <i class='far fa-heart' style="font-size:20px; cursor: pointer; margin-top: 15px " onclick="likef('{{$r->id}}')"></i>
            @endif
            @if($cn>0)
              <i class='fas fa-heart' style='font-size:20px;color:red'></i>
            @endif
            <?php


 $alredyliked = DB::table('likes')->where("picid","=",$r->id)->get();
//print_r($cnt);
 $cn1=count($alredyliked);


?>



           </span> <span id="sl{{$r->id}}">{{$cn1}}</span>

         </p>
        </form>
      </div>

      

    </div>
  </div>
</div>
              @endforeach
        
            </div>
         </div>
     </div>
   </div>
</div>
<script >
  function likef(id){
   
    $.ajax({
      url:'http://localhost/jeetlara/like',
      type:'POST',
      data:$("#lk"+id).serialize(),
      success:function(res){
        $("#btn"+id).html("<i class='fas fa-heart' style='font-size:20px;color:red'></i>")
       // $("#sl"+id).html(res);
        //alert(res);

      }
    });
  } 
</script>


</body>
</html>