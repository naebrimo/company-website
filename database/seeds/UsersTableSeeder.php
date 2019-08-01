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
        $users = [
            'name' => 'john doe',
            'email' => 'johndoe@example.com',
            'username' => 'johndoe',
            'password' => bcrypt('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($users);
    }
}
