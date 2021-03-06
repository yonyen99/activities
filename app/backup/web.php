<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/action', function () {
//     return view('pages.ourAction');
// })->name('show.action');
// Route::get('/about', function () {
//     return view('pages.aboutUs');
// })->name('show.about');
// Route::get('/join', function () {
//     return view('pages.joinUs');
// })->name('show.join');
// Route::get('/news', function () {
//     return view('pages.news');
// })->name('show.news');
// Route::get('/contact', function () {
//     return view('pages.contactUs');
// })->name('show.contact');
// function to teacher array with index
// Route::get('/teacher/{index}', function ($index) {
//     $Names = array("Channack", "Ronan", "Sieha", "Rady", "Rith");
//     $arrlength = count($Names) - 1;
//     for ($x = 0; $x <= $arrlength; $x++) {
//         if ($index == $x) {
//             return "The teacher is: " . $Names[$x];
//             echo "<br>";
//         }
//     }
//     if ($index > $arrlength) {
//         echo "The array is: ";
//         for ($x = 0; $x <= $arrlength; $x++) {
//             if ($x < $arrlength) {
//                 echo "[" . $x . "]" . $Names[$x] . " , ";
//             } else {
//                 echo  "[" . $x . "]" . $Names[$x];
//             }
//         }
//         echo "<br>";
//         echo "NO teacher with this index: " . $index;
//         echo "<br>";
//         echo "The largest in index is: " . $arrlength;
//     }
// });

// create new route
Route::get('/teacher/{index}', function ($index) {
    // create new array
    $teachers = array("Channak", "Ronan", "Shieha", "Rady", "Rith");
    if ($index < sizeof($teachers)) {
        echo "This teacher is : " . $teachers[$index];
    } else {
        echo "This array is :";
        for ($i = 0; $i < sizeof($teachers); $i++) {
            $countIndex = sizeof($teachers) - 1;
            //create variable $echo to output
            $echo =  "[$i] " . $teachers[$i];
            if ($i < $countIndex) {
                echo $echo. ", ";
            } else {
                echo $echo."<br>";
            }
        }
        echo "No Teacher with this index: " . $index."<br>";
        echo "The largest index is :" . $countIndex;
    }
});

Route::get('/action','PagesController@action')->name('show.action');
Route::get('/about','PagesController@about')->name('show.about');
Route::get('/join','PagesController@join')->name('show.join');
Route::get('/news','PagesController@news')->name('show.news');
Route::get('/contact','PagesController@contact')->name('show.contact');

Route::get('/customer','PagesController@showCustomer');
Route::get('/student','StudentController@showStudent');
Route::get('/subject','SubjectsController@showSubject')->name('show.subject');
Route::get('/student/{name}','StudentController@searchStudent');
//uri student
Route::get('/student','StudentController@getStudents');
// Route::post('insertStudent','StudentController@InsertStudent');
//add the student
Route::get('/showFormStudent','StudentController@showFormStudent');
Route::post('save','StudentController@saveStudent');
//edit student
Route::get('/showEditStudent/{id}','StudentController@showEdit')->name('showedit');
Route::patch('/update/{id}','StudentController@updateStudent')->name('update');

//delete student
Route::get('/delete{id}','StudentController@deleteStudent')->name('deleteStudent');

Route:: resource('studentsNew','StudentControllerNewVersion');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addProfile', 'UserController@addProfile');
// Route::get('/showProfile', 'UserController@showProfile');

Route::get('/showUserName', 'ProfileController@showUserName');
Route::get('/update', 'UserController@update');
Route::get('/profileUpdate', 'ProfileController@profileUpdate');
Route::get('/addPro', 'ProfileController@addPro');

Route::get('/showProfile', 'UserController@showProfile');
Route::get('/editprofile/{id}', 'UserController@editprofile')->name('editprofile');
Route::patch('/updateprofile/{id}', 'UserController@updateprofile')->name('updateprofile');
Route::get('/deleteProfile/{id}', 'UserController@deleteProfile')->name('deleteProfile');


Route::get('/index', 'UserController@index')->name('index');
Route::post('/store', 'UserController@store')->name('store');
Route::get('/show', 'UserController@show')->name('show');
