<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addProfile()
    {
        // $User = User::find(3);
        // $Profile = new Profile();
        // $Profile->phone="999999999";
        // $Profile->address="phonm phenh";
        // $Profile ->user_id = $User->id;
        // $Profile->save();

        //one way 
        // $User = User::find(1);
        // $Profile = Profile::Create(
        //     [
        //         'user_id'=>$User->id,
        //         'phone'=>'99999999',
        //         'address'=>'phnom penh'
        //     ]
        // );
        // one way
        // $User = User::find(1);
        // $Profile = new Profile([
        //     'phone'=>'999999',
        //     'address'=>'aaaaa'
        // ]);
        // $User->profile()->save($Profile);

        // one way
        // $User = User::find(1);
        // $Profile = new Profile([
        //     'phone'=>'999999',
        //     'address'=>'aaaaa'
        // ]);
        // $User->profile()->save($Profile);

        // $Users = User::find(2);
        // $Profiles = new Profile();
        // $Profiles->phone="88888888";
        // $Profiles->address="Battambang";
        // $Profiles ->user_id = $Users->id;
        // $Profiles->save();

        // one way
        // $Users = User::find(2);
        // $Profile = Profile::created([
        //     'user_id'=>$Users->id,
        //     'phone'=>'888888',
        //     'address'=>'Kompong thom'
        // ]);

        $user = User::find(5);
        $user->profile()->create([
            'phone' => "999999",
            'address' => "I live in canada"
        ]);

        return "success";
    }

    public function showProfile()
    {
        $user = User::all();
        return view('showUser', compact('user'));
    }


    public function update()
    {
        $User = User::find(2);
        $User->update([
            'name' => 'Rathi',
            'email' => 'Thi@gmail.com'
        ]);
        $User->profile()->update([
            'phone' => '000000000',
            'address' => 'I live in kpt'
        ]);
        return "was update";
    }


    //edit
    public function editprofile($id)
    {
        $user = User::find($id);
        return view('form.edit', compact('user'));
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
        return redirect('showProfile');
    }

    public function deleteProfile($id){
        $user = User::find($id);
        $user->delete([
            'name','email'
        ]);
        $user->profile()->delete([
            'phone','address'
        ]);
        $user->save();
        return redirect('showProfile');
    }


    public function index()
    {
        //
        $user = User::all();
        return view('post.form', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $User = User::find(1);
        $post = new \App\Post();
       $post->title = $request->get('title');
       $post->body= $request->get('body');
       $post->user_id = $User->id;
       $post->save();
         return redirect('home');
    }

    public function show()
    {
        //
        $user=User::find(1);
        return view('post.show', compact('user'));
    }

    
}
