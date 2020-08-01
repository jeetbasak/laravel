<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Mail;
use App\mail\sendMail;

class Test extends Controller
{
    public function abc(){

    return view('home');

    }

    public function xyz(Request $r){
    	$n=$r->name;
        $e=$r->email;
        $obj=new App\Usermod();
        $obj->name=$n;
        $obj->email=$e;
        $obj->save();

        $w=array(
        	'name'=>$n,
        	'email'=>$e

        );
        return view('home2')->with($w);
   

    }


// ..............................this method is use to send msg without any html templet.........................................
    
/*public function send(){

Mail::send(['text'=>'Mail'],['name'=>'jeetb'],function($message){  // this send function will take 3 argument(1.type 2.name 3.funct)

$message->to('jeetbasak54@gmail.com','To jeet')->subject('test email');
$message->from('111111zqhm@gmail.com','jeetbasak');

});

}
*/
// ................................this method is use to send msg with using a html templet........................................

    public function send(){

Mail::send(new sendMail());

}



public function email(){

return view('email');
}



}