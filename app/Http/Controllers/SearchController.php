<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sto;
use App\Town;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function find(Request $request)
    {
        $search = $request->get('search');
//        $town = Town::all();
//        $sto = DB::table('sto')->where('address', 'like', '%' . $search . '%')->get();
        $sto = DB::table('sto')->where('town', 'like', '%' . $search . '%')->get();

        return view('pages.index')->with(compact('sto'));
    }

}
