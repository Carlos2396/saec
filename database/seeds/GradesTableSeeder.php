<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'grader_id' => 'A00000000',
            'graded_id' => 'A00000001',
            'domain_sublevel_id' => 1,
            'value' => 9
        ]);

        DB::table('grades')->insert([
            'grader_id' => 'A00000001',
            'graded_id' => 'A00000000',
            'domain_sublevel_id' => 1,
            'value' => 2
        ]);
    }
}
