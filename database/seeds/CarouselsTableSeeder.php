<?php

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultTitle = 'Lorem Ipsum Dolor Sit Amet';
        $defaultDescription = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec dui nunc mattis enim ut tellus elementum sagittis. Volutpat diam ut venenatis tellus in metus vulputate eu.';
        $carousels = [
            [
                'page_id' => 1,
                'image' => 'img100.jpg',
                'caption_title' => $defaultTitle,
                'caption_description' => $defaultDescription,
                'links_href' => 'index',
                'links_body' => 'read more',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 1,
                'image' => 'img102.jpg',
                'caption_title' => $defaultTitle,
                'caption_description' => $defaultDescription,
                'links_href' => 'index',
                'links_body' => 'read more',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'image' => 'img103.png',
                'caption_title' => $defaultTitle,
                'caption_description' => $defaultDescription,
                'links_href' => 'index',
                'links_body' => 'read more',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'image' => 'img4.jpg',
                'caption_title' => $defaultTitle,
                'caption_description' => $defaultDescription,
                'links_href' => 'index',
                'links_body' => 'read more',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => 19,
                'image' => 'boban-simonovski-akQ06aB6MfM-unsplash.jpg',
                'caption_title' => $defaultTitle,
                'caption_description' => $defaultDescription,
                'links_href' => 'index',
                'links_body' => 'read more',
                'active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('carousels')->insert($carousels);
    }
}
