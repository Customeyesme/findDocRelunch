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
         $this->call(CitiesTableSeeder::class);
         $this->call(SpecialtiesTableSeeder::class);
         $this->call(InstitutionsTableSeeder::class);
         $this->call(DoctorsTableSeeder::class);
         $this->call(DoctorsSpecialtiesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
