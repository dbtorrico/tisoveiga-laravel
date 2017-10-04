<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('professors')->insert([
            'nome' => "Flávio",
            'email' => "flavio@flavio",
            'telefone' => "1111111",
            'leciona' => "Violão"
        ]);

        DB::table('professors')->insert([
            'nome' => "Bressan",
            'email' => "bressan@bressan",
            'telefone' => "1111111",
            'leciona' => "Musicalização"
        ]);

        DB::table('professors')->insert([
            'nome' => "Andressa",
            'email' => "andressa@andressa",
            'telefone' => "1111111",
            'leciona' => "Piano"
        ]);

        DB::table('professors')->insert([
            'nome' => "Humberto",
            'email' => "humberto@humberto",
            'telefone' => "1111111",
            'leciona' => "Coral"
        ]);
    }
}
