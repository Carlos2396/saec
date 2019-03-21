<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(GroupStudentTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(ActivityProfessorTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TeamStudentTableSeeder::class);
        $this->call(CompetencesTableSeeder::class);
        $this->call(ActivityCompetenceTableSeeder::class);
        $this->call(SubcompetencesTableSeeder::class);
        $this->call(DomainLevelsTableSeeder::class);
        $this->call(DomainSublevelsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
=======
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
>>>>>>> auth
    }
}
