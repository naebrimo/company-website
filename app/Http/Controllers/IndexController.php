<?php

namespace App\Http\Controllers;

use App\Page;
use App\Carousel;
use App\Navlinks;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->page = Page::where('id', 1)->first();
    }
    /**
     * Show the index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $navlinks = $this->page->navlinks()->get();
        $carousels = $this->page->carousels()->get();
        $animal = 'dog';


        return view('index', [
            'navlinks' => $navlinks,
            'carousels' => $carousels,
            'animal' => $animal,
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
