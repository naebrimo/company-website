<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            'name' => 'john doe',
            'email' => 'johndoe@example.com',
            'username' => 'root',
            'password' => bcrypt('password123'),
            'active' => TRUE,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('admins')->insert($admins);
    }
}
