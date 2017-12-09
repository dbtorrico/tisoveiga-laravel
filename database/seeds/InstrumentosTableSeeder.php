<?php

use Illuminate\Database\Seeder;

class InstrumentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('instrumentos')->insert([
            'nome' => 'Violão'
        ]);
        DB::table('instrumentos')->insert([
            'nome' => 'Piano'
        ]);
        DB::table('instrumentos')->insert([
            'nome' => 'Saxofone'
        ]);
    }
}
