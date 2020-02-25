<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function show()
    {
     
        $ = Student::all();
        return view('pages.students', compact('Students'));
    }

}
