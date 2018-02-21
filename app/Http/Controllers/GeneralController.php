<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twitter;

class GeneralController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if(!$search)
        {
            $search="American Food";
        }

        $data = Twitter::getSearch(['q'=>$search,'count' => 10, 'format' => 'array']);
        
        return view('search')->with('search',$search)->with('data',$data);
    }
}
