<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentControllerNewVersion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Students = Student::all();
        return view('pages.students', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pages.formStudents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request ->validate([
            'fname' => 'required',
            'lname' => 'required',
         ]);
 
         $student = new \App\Student;
         $student->FirstName = $request->get('fname');
         $student->LastName = $request->get('lname');
         $student->Age = $request->age;
 
         $student->save();
         return redirect('studentsNew');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $student = Student::find($id);
        // return view('pages.editStudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $student = Student::find($id);
        return view('pages.editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id);
        $student->FirstName = $request->get('fname');
        $student->LastName = $request->get('lname');
        $student->Age = $request->age;
        $student->save();
        return redirect('studentsNew');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student ->delete();
        return redirect('studentsNew');

    }
}
