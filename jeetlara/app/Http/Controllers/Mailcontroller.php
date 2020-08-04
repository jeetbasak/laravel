<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use App\mail\sendMail;

class Mailcontroller extends Controller
{
    

//........................  a simple email sending function without any html templet..............................................


public function send(){

Mail::send(['text'=>'Mail'],['name'=>'jeetb'],function($message){  // this send function will take 3 argument(1.type 2.name 3.funct)

$message->to('jeetbasak54@gmail.com','To jeet')->subject('test email');
$message->from('111111zqhm@gmail.com','jeetbasak');

});

}



//................................  a email sending function with using a html templet............................................

/*
public function send(){

Mail::send(new sendMail());


}*/






}
