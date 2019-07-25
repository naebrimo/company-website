<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
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
                'caption' => null,
            ],
            [
                'image' => 'zhao-chen-Yx0sVL2H8pA-unsplash.jpg',
                'caption' => null,
            ],
        ];
        $links = [
            [
                'href' => strtolower(config('app.name')),
                'text' => 'home',
            ],
            [
                'href' => 'index#our-partners',
                'text' => 'our partners',
            ],
            [
                'href' => 'index#who-we-are',
                'text' => 'who we are',
            ],
            [
                'href' => 'index#what-we-do',
                'text' => 'what we do',
            ],
            [
                'href' => 'intro',
                'text' => 'careers',
            ],
            [
                'href' => 'contact-us',
                'text' => 'contact us',
            ],
        ];

        return view('careers/index', [
            'links' => $links,
            'carousels' => $carousels
        ]);
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function applicationForm()
    {
        return view('careers/application-form');
    }
}
