<?php

use Illuminate\Database\Seeder;

class DomainSublevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domain_sublevels')->insert([
            'description' => 'DS1',
            'max' => 10,
            'domain_level_id' => 1
        ]);
    }
}
