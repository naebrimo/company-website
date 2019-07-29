<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultTitle = 'Lorem ipsum dolor sit amet';
        $defaultBody = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec dui nunc mattis enim ut tellus elementum sagittis. Volutpat diam ut venenatis tellus in metus vulputate eu. Pharetra massa massa ultricies mi quis. Interdum velit euismod in pellentesque massa placerat duis. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Eget duis at tellus at urna condimentum mattis pellentesque. Neque convallis a cras semper auctor neque. Nulla at volutpat diam ut venenatis tellus in metus vulputate. Donec ac odio tempor orci dapibus ultrices. Ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Pretium lectus quam id leo in vitae turpis massa. Pulvinar elementum integer enim neque. Tortor at auctor urna nunc.
        Vitae et leo duis ut diam quam. Dictum varius duis at consectetur lorem donec. Aliquam ut porttitor leo a diam sollicitudin. Curabitur vitae nunc sed velit dignissim sodales ut. Elementum nibh tellus molestie nunc non blandit. Suspendisse in est ante in nibh mauris cursus mattis molestie. Blandit aliquam etiam erat velit scelerisque in dictum non. Viverra tellus in hac habitasse platea dictumst. Sem et tortor consequat id porta nibh venenatis cras sed. Turpis massa tincidunt dui ut ornare lectus sit amet est. Massa ultricies mi quis hendrerit dolor magna eget est lorem. Pharetra sit amet aliquam id diam maecenas ultricies mi.
        Massa vitae tortor condimentum lacinia. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Elit at imperdiet dui accumsan. Enim nulla aliquet porttitor lacus luctus. Neque ornare aenean euismod elementum nisi quis. Congue quisque egestas diam in arcu cursus euismod. Duis tristique sollicitudin nibh sit amet commodo nulla. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Enim praesent elementum facilisis leo vel fringilla est. Ultricies leo integer malesuada nunc vel. Facilisis volutpat est velit egestas dui id ornare. Ut tortor pretium viverra suspendisse potenti nullam ac. Blandit cursus risus at ultrices mi.
        A pellentesque sit amet porttitor eget. Eu ultrices vitae auctor eu. Erat velit scelerisque in dictum non consectetur a erat nam. Vitae justo eget magna fermentum iaculis eu non diam. Gravida cum sociis natoque penatibus. Est placerat in egestas erat imperdiet sed euismod. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Orci a scelerisque purus semper eget. Massa ultricies mi quis hendrerit dolor. Convallis convallis tellus id interdum. Ornare suspendisse sed nisi lacus sed viverra tellus. Adipiscing elit ut aliquam purus sit amet. Ut porttitor leo a diam sollicitudin tempor. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Massa sapien faucibus et molestie ac feugiat sed lectus vestibulum. Tincidunt dui ut ornare lectus sit amet est.
        Eu augue ut lectus arcu bibendum at varius vel pharetra. Sit amet volutpat consequat mauris nunc congue nisi vitae. Purus in mollis nunc sed id semper risus in. Morbi tincidunt augue interdum velit euismod in pellentesque massa. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Condimentum mattis pellentesque id nibh. Ipsum consequat nisl vel pretium. Purus semper eget duis at tellus at urna condimentum. Tristique risus nec feugiat in fermentum posuere urna. Ut tellus elementum sagittis vitae et leo duis ut. Faucibus turpis in eu mi bibendum neque. Ut aliquam purus sit amet luctus venenatis. Nec nam aliquam sem et tortor consequat id porta nibh. Egestas diam in arcu cursus euismod quis viverra nibh cras. Augue lacus viverra vitae congue eu consequat ac.';

        $articles = [
            [
                'navlink_id' => 1,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 2,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 3,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 4,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 6,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 7,
                'template' => 'contact-us',
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 12,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 13,
                'template' => null,
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navlink_id' => 14,
                'template' => 'contact-us',
                'title' => $defaultTitle,
                'body' => $defaultBody,
                'active' =>TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
