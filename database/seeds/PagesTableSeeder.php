<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'parent_id' => null,
                'name' => 'home',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'our partners and brands',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'partners',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'brands',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'who we are',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'introduction',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'history',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'core values',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'mission',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'vision',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'what we do',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4,
                'name' => 'sales and marketing',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4,
                'name' => 'warehouse and logistics',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4,
                'name' => 'merchandising',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'corporate news',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'featured',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'latest news',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'archives',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'careers',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => 'contact us',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'name' => ' dashboard',
                'active' => TRUE,
                'authentication' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 21,
                'name' => ' login',
                'active' => TRUE,
                'authentication' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 21,
                'name' => ' register',
                'active' => FALSE,
                'authentication' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('pages')->insert($pages);
    }
}
