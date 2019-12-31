<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt;

class ShirtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //if $request has the key 'search', we know search params where used. Therefore filter down based on $searchTerm
        if ($request->exists('search')) {
            $searchTerm = $request->input('search');

            $shirts = Shirt::where('name', 'like', "%$searchTerm%")->paginate(9);
        }
        //else, display all shirts
        else {
            //paginate cannot be used on all() because it returns a collection
            //You must use it on where() or orderBy(), which returns a query
            $shirts = Shirt::orderBy('name', 'desc')->paginate(9);
        }

        return view('catalog')->with('shirts', $shirts);
    }

    /**
     * Filters shirts query based on request parameters
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        print_r($request->input());
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
        $shirt = Shirt::find($id)->first();
        return view('single-shirt')->with('shirt', $shirt);
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
