<?php

use Illuminate\Database\Seeder;

class TeamStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_student')->insert([
            'student_id' => 'A00000000',
            'team_id' => 1
        ]);

        DB::table('team_student')->insert([
            'student_id' => 'A00000001',
            'team_id' => 1
        ]);

        DB::table('team_student')->insert([
            'student_id' => 'A00000002',
            'team_id' => 1
        ]);
    }
}
