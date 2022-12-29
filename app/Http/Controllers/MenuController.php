<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs= Menu::all();
        return view ("admin.m_index",['rows'=>$rs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.M_add");
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
        $n= new Menu;
        $n->title = $request ->input('menu_title');
        $n->price = $request ->input('menu_price');
        $n->img = $request ->input('menu_image');
        $n->info = $request ->input('menu_info');
        $n->item_status = $request ->input('menu_status');
        $n->save();
        
        return redirect()
                        ->route('menus.index')
                        ->with('msg','Your Item Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rs = Menu::find($id);
        return view('admin.M_update',['row'=>$rs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
    public function update(Request $request, $id)
    {
        //
        $rc = Menu::find($id);

        $rc->title = $request ->input('menu_title');
        $rc->price = $request ->input('menu_price');
        $rc->img = $request ->input('menu_image');
        $rc->info = $request ->input('menu_info');
        $rc->item_status = $request ->input('menu_status');
        $rc->save();
        return redirect()
                        ->route('menus.index')
                        ->with('msg','Your Item updated Successfully');
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
        Menu::destroy($id);
        return redirect()
                        ->route('menus.index')
                        ->with('msg','Your Item Deleted Successfully');
    }
}
