<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public $arrayOfStudents = array("Preab", "Sovath", "Reach", "Rith", "Kanha");
    public function showStudent()
    {
        // return view('pages.students',compact('arrayOfStudents'));
        return view('pages.students')->with('students', $this->arrayOfStudents);
    }

    public function searchStudent($name)
    {

        foreach ($this->arrayOfStudents as $item) {
            if ($name == $item) {
                $result = $name . " is in this array";
                break;
            } else {
                $result = $name . " not found";
            }
        }
        return $result;
    }


    function getStudents()
    {
        // $Students = \App\Student::all();
        $Students = Student::all();
        return view('pages.students', compact('Students'));
    
    }

    // public function InsertStudent(Request $request)
    // {
    //     // $student = new student;
    //     // $student->FirstName = $request('firstname')->get();
    //     // $student->LastName = $request('lastname')->get();
    //     // $student->age = $request('age')->get();

    //     // // $student->save();
    //     // return redirect(student);
    //     return "insert...";
    // }
        //add student
    // public function saveStudent(Request $request){
    //     $request ->validate([
    //        'fname' => 'required',
    //        'lname' => 'required',
    //     ]);

    //     $student = new \App\Student;
    //     $student->FirstName = $request->get('fname');
    //     $student->LastName = $request->get('lname');
    //     $student->Age = $request->age;

    //     $student->save();
    //     return redirect('student');
    // }

    //show student

 
    // //show student

    // public function showFormStudent()
    // {
    //     return view('Pages.formStudents');
    // }

    //edit
    public function showEdit($id) {
       
        $student = Student::find($id);
         return view('pages.editStudent',compact('student'));
    }
    //update 
    public function updateStudent($id,Request $request) {
    
        $student = Student::find($id);
        $student->FirstName = $request->get('fname');
        $student->LastName = $request->get('lname');
        $student->Age = $request->age;
        $student->save();
        return redirect('student');
    }

    //delet student
    public function deleteStudent($id){
        $student = Student::find($id);
        $student ->delete();
      return redirect('student');
    }
 


}
