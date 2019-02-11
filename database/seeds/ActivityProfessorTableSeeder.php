<?php

use Illuminate\Database\Seeder;

class ActivityProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_professor')->insert([
            'activity_id' => 1,
            'professor_id' => 'L00000001'
        ]);

        DB::table('activity_professor')->insert([
            'activity_id' => 1,
            'professor_id' => 'L00000002'
        ]);
    }
}
