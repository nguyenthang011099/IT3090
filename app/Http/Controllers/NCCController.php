<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NCCController extends Controller
{
    public function show(){
        $nccs=DB::table('nccs');
        return view('list',['nccs'=>$nccs]);
    }
}
