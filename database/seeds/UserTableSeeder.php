<?php

use Illuminate\Database\Seeder;

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
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => Hash::make('quocday123'),
        	'role' => 1
        ]);
    }
}
