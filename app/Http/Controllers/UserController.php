<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
   

  

    public function showProfile()
    {
        $user = User::all();
        return view('challeng1.showUser', compact('user'));
    }

    //edit
    public function editprofile($id)
    {
        $user = User::find($id);
        return view('challeng1.edit', compact('user'));
    }

    // update 
    public function updateprofile($id, Request $request)
    {

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->profile->address = $request->get('address');
        $user->profile->phone = $request->get('phone');
        $user->save();
        $user->profile->save();
        return redirect('showProfile');
    }

   public function deleteProfile($id){
    $user = User::find($id);
    $user->delete();
    return redirect('showProfile');
   }


   public function showpostform(){
    $user = User::all();
    return view('challeng2.post', compact('user'));
   }

//    public function add($id,Request $request)
//    {
//     $user = User::find($id);
//         $post = new \App\Post();
//       $post->title = $request->get('title');
//       $post->body= $request->get('body');
//     //   $post->user_id = $user->id;
//       $post ->user_id = $user->id;
//       $post->save();
//       $user->save();
//         return redirect('home');
//    }

public function addpost(Request $request)
   {
    $user = User::find(auth::id());
        $post = new \App\Post();
      $post->title = $request->get('title');
      $post->body= $request->get('body');
      $post ->user_id = $user->id;
      $post->save();
      
        return redirect('home');
   }


   public function showpost()
   {
       $posts = Post::all();
       return view('challeng2.showpost', compact('posts'));
   }

   public function showpostedit($id){
    $post = Post::find($id);
    return view('challeng2.showedit', compact('post'));
   }

   public function updatepost($id, Request $request)
   {

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        return redirect('showpost');
    //    $user->name = $request->get('name');
    //    $user->email = $request->get('email');
    //    $user->profile->address = $request->get('address');
    //    $user->profile->phone = $request->get('phone');
    //    $user->save();
    //    $user->profile->save();
    //    return redirect('showProfile');
   }

   public function deletepost($id){
    $post = Post::find($id);
    $post ->delete();
    return redirect('showpost');

   }
    
}
