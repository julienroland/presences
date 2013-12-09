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

}