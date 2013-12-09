<?php


use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Teacher extends Eloquent implements UserInterface, RemindableInterface {

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

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

}