<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 'L00000000',
            'name' => 'P1',
            'email' => 'p1@tec.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'P1',
            'campus' => 'PUE'
        ]);

        DB::table('users')->insert([
            'id' => 'L00000001',
            'name' => 'P2',
            'email' => 'p2@tec.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'P2',
            'campus' => 'PUE'
        ]);

        DB::table('users')->insert([
            'id' => 'L00000002',
            'name' => 'P3',
            'email' => 'p3@tec.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'P3',
            'campus' => 'PUE'
        ]);

        DB::table('users')->insert([
            'id' => 'A00000000',
            'name' => 'S1',
            'email' => 'A00000000@itesm.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'S1',
            'campus' => 'CCM'
        ]);

        DB::table('users')->insert([
            'id' => 'A00000001',
            'name' => 'S2',
            'email' => 'A00000001@itesm.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'S2',
            'campus' => 'CEM'
        ]);

        DB::table('users')->insert([
            'id' => 'A00000002',
            'name' => 'S3',
            'email' => 'A00000002@itesm.mx',
            'password' => bcrypt('secret'),
            'lastname' => 'S3',
            'campus' => 'CEM'
        ]);
    }
}
