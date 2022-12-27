<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function getMenu(){
        //1- get DB Data
        $rs = DB::table('menus')
        ->where('item_status','=',1)
        // ->orWhere('title','like','%pizza%')
        // ->skip(4)
        // ->take(8)
        ->orderBy("title")             
        ->get();

        //2- Pass data to menu
        return view('menu',['rows'=>$rs]);
    }
}
