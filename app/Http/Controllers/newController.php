<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class newController extends Controller
{
    //
    public function newView($id)
    {
        $new = DB::table('news')->find($id);
        return view('new-view')->with(compact('new'));
    }

    public function addNew(Request $request)
    {
        # code...
        DB::table('news')->insertGetid([
            'title'=> $request->input('title'),
            'kind'=> $request->input('kind'),
            'des'=> $request->input('des'),
            'content'=> $request->input('content'),
            'thumb'=> $request->file('thumb')->store('/','public')
        ]);
    }
}
