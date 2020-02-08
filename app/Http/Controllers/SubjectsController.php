<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
  public  $Subjects = array
    (
    array('name'=>"Java",'score'=>100),
    array('name'=>"JavaScript",'score'=>90),
    array('name'=>"PHP",'score'=>70),
    array('name'=>"BootStrap",'score'=>100),
    array('name'=>"Laravel",'score'=>100)
    );
    public function showSubject(){
       
        return view('pages.subjects')->with('subjects',$this ->Subjects);;
      
      
    }
}
