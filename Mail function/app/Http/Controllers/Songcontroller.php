<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\song;
use App\user;
class Songcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   // $s=DB::table('songs')->get(); //...............one way to connect db table............................................

    $s=song::find(1)->actor;          //............not case sensitive (it can be Song or song)...............
   
 //return $s;
   /* $w=array(
    'row'=>$s
    );
*/
    return view('index',compact('s'));  //using compact sending data to view page...........................................
    //return view('index')->with($w);

    }

    
    public function create()
    {
        $users=\App\user::find(1)->mobile;
        return view('create',compact('users')); 
    }

  
    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
