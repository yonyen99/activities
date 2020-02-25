<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showUserName(){
        $profile = Profile::find(1);
        return $profile ->user->name;
    }

    // public function update(){
    //     $profile = Profile::find(1);
    // }
    
    public function profileUpdate(){
        $profile = Profile::find(1);
        $profile ->update([
            'phone'=>'012',
            'address'=>'I live in nan'
        ]);
        
        return "was ...";
    }

  

}
