<?php

use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class Teacher extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * Method helping to retrieve the courses of a teacher
     *
     * 
     */
    public function courses()
    {
        return $this->belongsToMany('Course')->withTimestamps();
    }

    public function students()
    {
        return $this->belongsToMany('Course')
                    ->join('course_student','courses.id','=','course_student.course_id')
                    ->join('students','course_student.student_id','=','students.id')
                    ->select('students.name as sn')
                    ->groupBy('students.id');
    }

    public static function studentsAsArray($id){

        return DB::table('teachers')
                    ->join('course_teacher', 'teachers.id', '=', 'course_teacher.teacher_id')
                    ->join('courses', 'courses.id', '=', 'course_teacher.course_id')
                    ->join('course_student', 'courses.id', '=', 'course_student.course_id')
                    ->join('students', 'students.id', '=', 'course_student.student_id')
                    ->whereTeacherId($id)
                    ->distinct('students.id')
                    ->get(['students.id as studentId', 'students.name as studentName']);
    }   


    public function studentsAsEloquentCollection()
    {
        $students = new EloquentCollection;
        //$courses  = $this->courses()->has('students')->with('students')->get();
        $courses  = $this->courses;

        foreach ($courses as $course) 
        {
            $students = $students->merge($course->students);
        }
        return $students;
    }

}