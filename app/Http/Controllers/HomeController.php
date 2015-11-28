<?php

namespace indual\Http\Controllers;

use Illuminate\Http\Request;

use indual\Http\Requests;
use indual\Http\Controllers\Controller;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu=1;
        return view('home',[
            'menu'			=>		$menu
        ]);
    }

    public function about()
    {
        //
        $menu=2;
        return view('about',[
            'menu'			=>		$menu
        ]);
    }
    public function products()
    {
        //
        $menu=3;
        return view('products',[
            'menu'			=>		$menu
        ]);
    }

    public function productDetail()
    {
        //
        $menu=3;
        return view('productDetail',[
            'menu'			=>		$menu
        ]);
    }

    public function services()
    {
        //
        $menu=4;
        return view('services',[
            'menu'			=>		$menu
        ]);
    }

    public function infrastructure()
    {
        //
        $menu=5;
        return view('infrastructure',[
            'menu'			=>		$menu
        ]);
    }

    public function contact()
    {
        //
        $menu=6;
        return view('contact',[
            'menu'			=>		$menu
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
