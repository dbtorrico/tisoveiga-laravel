<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        // $this->call(AlunosTableSeeder::class);
        // $this->call(InstrumentosTableSeeder::class);
        // $this->call(ProfessoresTableSeeder::class);
    }
}
