<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function action(){
        $action = "action";
        return view('pages.ourAction',compact('action'));
    }
    public function about(){
        $about = "about";
        return view('pages.aboutUs',compact('about'));
    }
    public function join(){
        $join = "join";
        return view('pages.joinUs',compact('join'));
    }
    public function news(){
        $news = "news";
        return view('pages.news',compact('news'));
    }
    public function contact(){
        $contact = "contact";
        return view('pages.contactUs',compact('contact'));
    }
    public function showCustomer(){
        $arrayName = array("Chandaraty","Maly","Samphas","Donat");
        $arrayNames = array(
            '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),
            '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
            '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
            '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
          
           
            );
     
        return view('pages.customer',compact('arrayNames'));
    }
}
