<?php

namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create page tree here
        $pages['root'] = $this->treeDecrypt('pages');



        return view('dashboard/pages/index', compact('pages'));
    }

    private function treeDecrypt($tableName, $parentId = null, $active = TRUE)
    {
        $index = $parentId;
        if(is_null($parentId) || $parentId <= 0) $index = 0;
        if(!Schema::hasColumn($tableName, 'id')) return FALSE;
        if(!Schema::hasColumn($tableName, 'parent_id')) return FALSE;
        if(!Schema::hasColumn($tableName, 'name')) return FALSE;
        if(!Schema::hasColumn($tableName, 'active')) return FALSE;

        $result[$index] = DB::table($tableName)
            ->where('parent_id', $parentId)
            ->where('active', $active)
            ->orderBy('id')
            ->get();

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/pages/createoredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard/pages/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/pages/createoredit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
