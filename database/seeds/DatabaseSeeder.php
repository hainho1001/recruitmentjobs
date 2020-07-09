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
        $data = [
        	[
        		'email' => 'admin@gmail.com',
        		'password' => bcrypt('password'),
        		'roles' => '1',
        	]
        ];
        DB::table('users')->insert($data);
    }
}
