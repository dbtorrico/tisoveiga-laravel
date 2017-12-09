<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@a.com',
            'password' => Hash::make('123'),
            'admin' => true,
            'remember_token' => 'teste',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
       
    }
}
