<?php

use Illuminate\Database\Seeder;

class NavlinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navlinks = [
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => strtolower(config('app.name')),
                'body' => 'home',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'our-partners',
                'body' => 'our partners',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'who-we-are',
                'body' => 'who we are',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'what-we-do',
                'body' => 'what we do',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'index.career.index#careers',
                'body' => 'careers',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'corporate-news',
                'body' => 'corporate news',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'contact-us',
                'body' => 'contact us',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => strtolower(config('app.name')),
                'body' => 'home',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'index#our-partners',
                'body' => 'our partners',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'index#who-we-are',
                'body' => 'who we are',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'index#what-we-do',
                'body' => 'what we do',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'careers',
                'body' => 'careers',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'corporate-news',
                'body' => 'corporate news',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'parent_id' => null,
                'section_id' => null,
                'navlink_type' => 0, // 0 is horizontal navbar
                'href' => 'contact-us',
                'body' => 'contact us',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('navlinks')->insert($navlinks);
    }
}
