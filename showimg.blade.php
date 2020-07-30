<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <img src="{{url('/')}}/pic/{{$r->image}}" style="width: 100%"> 
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


</body>
</html>