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
Route::get('/customer','PagesController@showCustomer')->name('show.customer');