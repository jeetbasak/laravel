<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Main extends Controller
{




public function ins(){
    return view("form");
}


public function submit(Request $s){

$n=$s->name;
$e=$s->email;
$g=$s->gender;
$sub=implode(",",$s->subject);
$p=$s->password;



$obj=new App\Modalm();

$obj->name=$n;
$obj->email=$e;
$obj->subject=$sub;
$obj->gender=$g;
$obj->password=$p;

$obj->save();


//redirect
return redirect('show');

}


public function show(Request $r){



if($r->session()->has('uid')){  //session ta peresent ache ki na..



$r=App\Modalm::all();//

$w=array(

'row'=>$r
	);

return view("show")->with($w); }

else{

	return redirect("lgfrm");
}
}



public function delete(Request $r){

$id=$r->id;

//search from database

$obj=App\Modalm::find($id);
$obj->delete();

return redirect('show');


}


public function search(Request $r){

	$n=$r->search;
	
	$obj= App\Modalm::where("name","like",$n.'%')->orwhere("email","=",$n)->get();

	//print_r($obj);

$w=array(

'row'=>$obj
);

return view("search")->with($w);
}

public function lgfrm(){

	return view("login");
}






public function lgck(Request $r){

$e=$r->email;
$p=$r->password;

$obj=App\Modalm::where("email","=",$e)->where("password","=",$p)->get();

if(count($obj)>0){
foreach($obj as $x){    //,,,,,,,,,,,,,,,,,,,,,,foreachloop a session load with any wanted field
$r->session()->put("uid",$x->id);  //.,.,,,,.,.,.,.,session set korlam if login is successful
$r->session()->put("uname",$x->name);

return redirect("imgform");
}
}
else{
$r->session()->flash("msg","invalid email or password");  // error msg show korabe using flash
	

	return redirect("loginform");
}


}


public function logout(Request $r){

	$r->session()->forget("uid");
	$r->session()->forget("uname");
return redirect("loginform");
}



public function imgform(Request $r){

return view("gallery");

}





public function imgins(Request $r){

$sid=$r->session()->get("uid");

$c=$r->file("image"); //form ar files name

$fn=$c->getClientOriginalName();

$ext=$c->getClientOriginalExtension();
 $size=$c->getSize();


if(($ext=="jpg" || $ext=="png" || $ext=="jpeg") && (($size/1024)<=2000)){

$obj= new App\Gallerym();

$obj->sid=$sid;
$obj->image=$fn;


$obj->save();

$c->move("pic",$fn);

return redirect("showimg");

}
}




public function showimg(Request $r){

$uid=$r->session()->get("uid");

$obj=App\Gallerym::where("sid","=",$uid)->get();

$w=array(

'row'=>$obj

);


return view("showimg")->with($w);
}




public function details(Request $r){

$id=$r->id;

$obj=App\Gallerym::where("sid","=",$id)->get();


$obj1=App\Modalm::where("id","=",$id)->get();

$w=array(

'row'=>$obj,
'row1'=>$obj1

);


return view("details")->with($w);



}


}
