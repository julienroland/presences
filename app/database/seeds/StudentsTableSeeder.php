<?php 
class StudentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('students')->delete();

        ini_set("auto_detect_line_endings", true);
        
        //Ajout des troisièmes années
        $file = fopen(app_path().'/database/seeds/students.csv', 'r');
        if ($file) {
            $groups = [];
                
            while (($buffer = fgetcsv($file, 80, ';')) !== false) {
                //En quelle année est-il ? et on profite pour mémoriser les différents groupes
                $group = $buffer[2];
                if(!in_array($group,$groups)){ 
                    $groups[] = $group;
                    Group::create([
                        'name' => $group
                        ]);
                }

                //L’identifiant de l’année d’études est le deuxième caractère du nom du groupe
                //2285 signifie donc un groupe de deuxième
                $yearIdInGroup = $group[1];

                switch($yearIdInGroup){
                    case 1: $level = 'première'; break;
                    case 2: $level = 'deuxième'; break;
                    case 3: $level = 'troisième'; break;
                }

                Student::create([
                        'name' => $buffer[0],
                        'first_name' => $buffer[1],
                        'email' => $buffer[3],
                        'photo' => NULL,
                        'level_id' => Level::where('name','=',$level.' année infographie')->first()->id  
                        ]);
                
                //Création de la relation entre l’étudiant et son groupe
                $group_student = [
                    'group_id' => Group::where('name','=',$group)->first()->id,
                    'student_id' => Student::where('email','=',$buffer[3])->first()->id,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                ];

                DB::table('group_student')->insert($group_student);


            }
            

            if (!feof($file)) {
                echo "Erreur: fgetcsv() a échoué\n";
                return;
            }
            
            fclose($file);
        }
    }
        
}