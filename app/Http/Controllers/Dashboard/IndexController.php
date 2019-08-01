<?php

namespace App\Http\Controllers\Dashboard;

use App\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('dashboard/index');
    }
}
