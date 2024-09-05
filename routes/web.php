<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/students/create', function (){
    $student = new Student();
    $student->first_name = 'Gerald';
    $student->last_name = 'Daga';
    $student->email = 'geralddaga1212@gmail.com';
    $student->save();
    return 'Student Created!';
});

Route::get('/students', function (){
    $student = Student::all();
    return $students;
});

Route::get('/student/update', function(){
    $student = Student::where('email','geralddaga1212@gmail.com')->first();
    $student->email = 'geralddaga1212@gmail.com';
    $student->save();
    return 'Student Updated!';

});

Route::get('/students/delete', function (){
    $student = Student::where('email','geralddaga1212@gmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

Route::get('/', function () {
    return view('welcome');
});
