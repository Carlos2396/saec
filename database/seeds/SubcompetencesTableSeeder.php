<?php

use Illuminate\Database\Seeder;

class SubcompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcompetences')->insert([
            'description' => 'SC1',
            'competence_id' => 1
        ]);
    }
}
