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
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(NavlinksTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
