<?php 
class SessionStudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('session_student')->delete();

        $students = Student::with('courses')->get();
        $sessions = CourseSession::all();

        foreach($students as $student){
            $courses = $student->courses;
            foreach($courses as $course){
                foreach ($sessions as $session) {
                    if($course->id == $session->course_id)
                    {
                        $student->sessions()->attach($session);
                    }
                }
            }
            
        }
        
    }

}