<?php 
class CourseStudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('course_student')->delete();

        $levels = ['première année infographie','deuxième année infographie','troisième année infographie'];
        
        $students = Student::with('groups')->get();
        $courses = Course::all();

        foreach($students as $student){
            $groupName = $student->groups[0]->name;
            foreach ($courses as $course) {
                if($course->level_id == Level::whereName($levels[$groupName[1]-1])->first()->id)
                {
                    $student->courses()->attach($course);
                }
            }
        }
    }

}