<?php

use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert([
            'name' => 'C1',
            'description' => 'C1',
            'type' => 'Type1',
            'professor_id' => 'L00000000'
        ]);
    }
}
