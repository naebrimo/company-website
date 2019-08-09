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
            //1
            [
                'parent_id' => null,
                'name' => 'home',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //2
            [
                'parent_id' => null,
                'name' => 'our partners',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //3  
            [
                'parent_id' => 2,
                'name' => 'partners',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //4
            [
                'parent_id' => 3,
                'name' => 'brief introduction',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //5
            [
                'parent_id' => 3,
                'name' => 'brands',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            //6
            [
                'parent_id' => 2,
                'name' => 'affiliates',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //7
            [
                'parent_id' => null,
                'name' => 'who we are',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //8
            [
                'parent_id' => 7,
                'name' => 'introduction',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //9
            [
                'parent_id' => 7,
                'name' => 'brief history',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //10
            [
                'parent_id' => 7,
                'name' => 'mission',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //11
            [
                'parent_id' => 7,
                'name' => 'vision',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //12
            [
                'parent_id' => 7,
                'name' => 'core values',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //13
            [
                'parent_id' => null,
                'name' => 'what we do',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            //14
            [
                'parent_id' => 13,
                'name' => 'merchandising',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //15
            [
                'parent_id' => 13,
                'name' => 'sales and marketing',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],   
            //16
            [
                'parent_id' => 13,
                'name' => 'warehouse and logistics',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],   
            //17
            [
                'parent_id' => null,
                'name' => 'careers',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //18
            [
                'parent_id' => 17,
                'name' => 'introduction',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //19
            [
                'parent_id' => 17,
                'name' => 'career postings',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            //20
            [
                'parent_id' => 19,
                'name' => 'job details',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //21
            [
                'parent_id' => 20,
                'name' => 'application form',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            //22
            [
                'parent_id' => null,
                'name' => 'corporate news',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //23
            [
                'parent_id' => 22,
                'name' => 'featured',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            //24
            [
                'parent_id' => 22,
                'name' => 'latest',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            //25
            [
                'parent_id' => 22,
                'name' => 'archives',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],      
            //26
            [
                'parent_id' => null,
                'name' => 'contact us',
                'active' => TRUE,
                'authentication' => FALSE,
                'created_at' => now(),
                'updated_at' => now(),
            ],                                                                                                                                                                                                                                                                                                                  
        ];
        DB::table('pages')->insert($pages);
    }
}
