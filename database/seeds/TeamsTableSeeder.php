<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'team_number' => 1,
            'activity_id' => 1,
            'professor_id' => 'L00000000'
        ]);
    }
}
