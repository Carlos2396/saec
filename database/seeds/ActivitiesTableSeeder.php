<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'name' =>  1,
            'start_date' => Carbon::create('2019', '01', '01'),
            'due_date' => Carbon::create('2019', '01', '02'),
            'close_date' => Carbon::create('2019', '01', '03'),
            'group_id' => 1,
            'professor_id' => 'L00000000'
        ]);
    }
}
