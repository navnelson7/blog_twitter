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
        //definiendo un seeder
        User::create([
            'name' => 'Juan Navarro',
            'email' => 'navnelson7@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
