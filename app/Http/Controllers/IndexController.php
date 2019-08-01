<?php

namespace App\Http\Controllers;

use App\Page;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->page = Page::where('id', 1)->first();
    }

    public function index()
    {
        $navlinks = $this->page->navlinks()->get();
        $carousels = $this->page->carousels()->get();

        return view('index', compact('navlinks', 'carousels'));
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
