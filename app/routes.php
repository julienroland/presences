<?php

    use Carbon\Carbon as Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Event::listen('illuminate.query',function($sql){
//     var_dump($sql);
//     echo ('<br><br><br>');
// });



Route::bind('teacher', function($value, $route)
{
    return Teacher::where('slug', $value)->firstOrFail();
});

Route::bind('student', function($value, $route)
{
    return Student::where('slug', $value)->firstOrFail();
});

Route::bind('course', function($value, $route)
{
    return Course::where('slug', $value)->firstOrFail();
});



Route::get('/', function()
{
    return 'hello';
});

Route::get('teacher/{teacher}', function($teacher)
{
    return $teacher;    
});

Route::get('teacher/{teacher}/courses', function($teacher)
{
    return $teacher->courses;
    
});

Route::get('teacher/{teacher}/students', function($teacher)
{
    return $teacher->students;
    
});

Route::get('student/{student}', function($student)
{
    return $student;
});

Route::get('student/{student}/courses', function($student)
{
    return $student->courses;
});

Route::get('course/{course}', function($course)
{
    return $course;
});

Route::get('course/{course}/sessions', function($course)
{
    return $course->sessions;
});

Route::get('course/{course}/students', function($course)
{
    return $course->students;
});

Route::get('course/{course}/student/{student}/sessions', function($course,$student)
{
    return $student->sessionsByCourse($course);
});

Route::get('course/{course}/teachers', function($course)
{
    return $course->teachers;
});

