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
        $pages = $this->treeDecrypt('pages');

        return view('dashboard/pages/index', compact('pages'));
    }

    private function treeDecrypt($tableName, $active = TRUE, $parentId = 0)
    {
        if(!Schema::hasColumn($tableName, 'id')) return FALSE;
        if(!Schema::hasColumn($tableName, 'parent_id')) return FALSE;
        if(!Schema::hasColumn($tableName, 'name')) return FALSE;
        if(!Schema::hasColumn($tableName, 'active')) return FALSE;

        $sql  = 'SELECT DISTINCT(`parent_id`) ';
        $sql .= 'FROM `'. $tableName .'` ';
        $sql .= 'WHERE `active` = "' . $active . '" ';
        $sql .= 'ORDER BY `id`';

        $query = DB::select($sql);
        $result = [];
        foreach($query as $q)
        {
            $result[(is_null($q->parent_id)) ? 0: $q->parent_id] = DB::table($tableName)
                ->where('parent_id', $q->parent_id)
                ->where('active', $active)
                ->orderby('id')
                ->get();
        }
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
