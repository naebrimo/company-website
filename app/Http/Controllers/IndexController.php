<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * Show the index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $carousels = [
            [
                'image' => 'boban-simonovski-akQ06aB6MfM-unsplash.jpg',
                'caption' => [
                    'title' => 'First Slide',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec dui nunc mattis enim ut tellus elementum sagittis. Volutpat diam ut venenatis.',
                    'link' => [
                        'href' => 'index.our-partners',
                        'text' => 'read more',
                    ],
                ],
            ],
            [
                'image' => 'zhao-chen-Yx0sVL2H8pA-unsplash.jpg',
                'caption' => [
                    'title' => 'Second Slide',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec dui nunc mattis enim ut tellus elementum sagittis. Volutpat diam ut venenatis.',
                    'link' => [
                        'href' => 'index.our-partners',
                        'text' => 'read more',
                    ],
                ],
            ],
        ];
        $links = [
            [
                'href' => strtolower(config('app.name')),
                'text' => 'home',
            ],
            [
                'href' => 'our-partners',
                'text' => 'our partners',
            ],
            [
                'href' => 'who-we-are',
                'text' => 'who we are',
            ],
            [
                'href' => 'what-we-do',
                'text' => 'what we do',
            ],
            [
                'href' => 'index.career.index#intro',
                'text' => 'careers',
            ],
            [
                'href' => 'contact-us',
                'text' => 'contact us',
            ],
        ];

        return view('index', [
            'links' => $links,
            'carousels' => $carousels
        ]);
    }

    /**
     * Show the our-partners page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function ourPartners($partners = null)
    {
        return view('our-partners');
    }

    /**
     * Show the who-we-are page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function whoWeAre($section = null)
    {
        return view('who-we-are');
    }

    /**
     * Show the what-we-do page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function whatWedo($services = null)
    {
        return view('what-we-do');
    }

    /**
     * Show the contact-us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function contactUs()
    {
        return view('contact-us');
    }
}
