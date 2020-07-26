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



$obj=new App\Modalm();

$obj->name=$n;
$obj->email=$e;
$obj->subject=$sub;
$obj->gender=$g;

$obj->save();


//redirect
return redirect('show');

}


public function show(){

$r=App\Modalm::all();//

$w=array(

'row'=>$r
	);

return view("show")->with($w);
}





}
