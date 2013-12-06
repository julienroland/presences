<?php 
use Carbon\Carbon as Carbon;

class SessionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('sessions')->delete();


        //Les 14 sessions de projets web, labo du mardi
        $session_start = new Carbon('2013-09-17 08:20:00');
        $session_end = new Carbon('2013-09-17 17:40:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Projets Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de projets web, labo du mercredi
        $session_start = new Carbon('2013-09-18 08:20:00');
        $session_end = new Carbon('2013-09-18 17:40:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Projets Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }
        
        //Les 14 sessions de design web, labo du mardi début de matinée
        $session_start = new Carbon('2013-09-17 08:20:00');
        $session_end = new Carbon('2013-09-17 10:20:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Design Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }
        
        //Les 14 sessions de design web, labo du mardi fin de matinée
        $session_start = new Carbon('2013-09-17 10:30:00');
        $session_end = new Carbon('2013-09-17 12:30:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Design Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de design web, labo du mardi début d’aprem
        $session_start = new Carbon('2013-09-17 13:30:00');
        $session_end = new Carbon('2013-09-17 15:30:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Design Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de design web, labo du mercredi début d’aprem
        $session_start = new Carbon('2013-09-18 13:30:00');
        $session_end = new Carbon('2013-09-18 15:30:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Design Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de design web, labo du mercredi fin d’aprem
        $session_start = new Carbon('2013-09-18 15:40:00');
        $session_end = new Carbon('2013-09-18 17:40:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Design Web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }
        
        //Les 14 sessions de CPW-Labo du vendredi début de matinée
        $session_start = new Carbon('2013-09-20 08:20:00');
        $session_end = new Carbon('2013-09-20 10:20:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Création de pages web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de CPW-Labo du vendredi fin de matinée
        $session_start = new Carbon('2013-09-20 10:30:00');
        $session_end = new Carbon('2013-09-20 12:30:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Création de pages web, labo')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }
        
        //Les 14 sessions de CPW-Th du mercredi début de matinée
        $session_start = new Carbon('2013-09-20 08:20:00');
        $session_end = new Carbon('2013-09-20 10:20:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Création de pages web, théorie')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }

        //Les 14 sessions de CPW-Th du mercredi début de matinée
        $session_start = new Carbon('2013-09-20 10:30:00');
        $session_end = new Carbon('2013-09-20 12:30:00');

        for($i=0;$i<14;$i++){
            CourseSession::create(
            [
                'date_start' => $i?$session_start->addWeek():$session_start,
                'date_end' => $i?$session_end->addWeek():$session_end,
                'course_id' => Course::whereName('Création de pages web, théorie')->first()->id,
                'description' => 'à modifier dans l’admin'
            ]);
        }
    }

}