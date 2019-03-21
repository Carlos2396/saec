<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('secret')
        ]);
        $admin->assignRole('admin');
        $admin->email_verified_at = Carbon::now();
        $admin->save();

        $professor = User::create([
            'name' => 'Professor',
            'email' => 'professor@test.com',
            'password' => Hash::make('secret')
        ]);
        $professor->assignRole('professor');

        $student = User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret')
        ]);
        $student->assignRole('student');      
    }
}
