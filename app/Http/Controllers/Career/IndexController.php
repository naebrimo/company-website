<?php

namespace App\Http\Controllers\Career;

use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->page = Page::where('id', 19)->first();
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

        return view('index', [
            'navlinks' => $navlinks,
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
