<?php

use Illuminate\Database\Seeder;

class DomainLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domain_levels')->insert([
            'description' => 'DL1',
            'subcompetence_id' => 1
        ]);
    }
}
