<?php

use Illuminate\Database\Seeder;

class ActivityCompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_competence')->insert([
            'activity_id' => 1,
            'competence_id' => 1
        ]);
    }
}
