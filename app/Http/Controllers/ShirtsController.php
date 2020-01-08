<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt;
use Spatie\QueryBuilder\QueryBuilder;

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

        //get list of colors for filters
        $colorList = $this->generateColorList();

        return view('catalog')->with('shirts', $shirts)->with('colors', $colorList);
    }

    public function adminIndex(Request $request)
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
            $shirts = Shirt::orderBy('id', 'asc')->paginate(20);
        }

        //get list of colors for filters
        $colorList = $this->generateColorList();

        return view('admin')->with('shirts', $shirts)->with('colors', $colorList);
    }

    /**
     * Creates a query of all shirts and filters the query down based on
     * the parameters in $request.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {

        $shirtQuery = Shirt::query();

        //get list of colors for filters
        $colorList = $this->generateColorList();

        if($request->input('gender')) {
            $shirtQuery->where('gender', $request->input('gender'));
        }
        if($request->input('size')) {
            $shirtQuery->where('size', $request->input('size'));
        }
        if($request->input('color')) {
            $shirtQuery->where('color', $request->input('color'));
        }

        //price filters
        if($request->input('minPrice') && $request->input('maxPrice')) {
            //parse to floats
            $minPrice = floatval($request->input('minPrice'));
            $maxPrice = floatval($request->input('maxPrice'));

            $shirtQuery->whereBetween('price', [$minPrice, $maxPrice]);
        }
        else if($request->input('minPrice')) {
            $minPrice = floatval($request->input('minPrice'));

            $shirtQuery->where('price', '>=', $minPrice);
        }
        else if($request->input('maxPrice')) {
            $maxPrice = floatval($request->input('maxPrice'));

            $shirtQuery->where('price', '<=', $maxPrice);
        }

        return view('catalog')->with('shirts', $shirtQuery->paginate(9))->with('colors', $colorList);
        
    }

    /**
     * Creates a query of all shirts and filters the query down based on
     * the parameters in $request.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminFilter(Request $request)
    {

        $shirtQuery = Shirt::query();

        //get list of colors for filters
        $colorList = $this->generateColorList();

        if($request->input('gender')) {
            $shirtQuery->where('gender', $request->input('gender'));
        }
        if($request->input('size')) {
            $shirtQuery->where('size', $request->input('size'));
        }
        if($request->input('color')) {
            $shirtQuery->where('color', $request->input('color'));
        }

        //price filters
        if($request->input('minPrice') && $request->input('maxPrice')) {
            //parse to floats
            $minPrice = floatval($request->input('minPrice'));
            $maxPrice = floatval($request->input('maxPrice'));

            $shirtQuery->whereBetween('price', [$minPrice, $maxPrice]);
        }
        else if($request->input('minPrice')) {
            $minPrice = floatval($request->input('minPrice'));

            $shirtQuery->where('price', '>=', $minPrice);
        }
        else if($request->input('maxPrice')) {
            $maxPrice = floatval($request->input('maxPrice'));

            $shirtQuery->where('price', '<=', $maxPrice);
        }

        return view('admin')->with('shirts', $shirtQuery->paginate(9))->with('colors', $colorList);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $shirt = new Shirt;
        $shirt->name = $request->input('name');
        $shirt->gender = $request->input('gender');
        $shirt->size = $request->input('size');
        $shirt->color = $request->input('color');
        $shirt->price = $request->input('price');
        $shirt->image = 'placeholder.jpg';
        $shirt->save();

        return redirect('/admin')->with('success', 'Shirt created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shirt = Shirt::find($id);
        return view('single-shirt')->with('shirt', $shirt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $shirt = Shirt::find($id);
        return view('edit')->with('shirt', $shirt);
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
        $shirt = Shirt::find($id);
        $shirt->name = $request->input('name');
        $shirt->gender = $request->input('gender');
        $shirt->size = $request->input('size');
        $shirt->color = $request->input('color');
        $shirt->price = $request->input('price');
        $shirt->save();

        return redirect('/admin')->with('success', 'Shirt updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shirt = Shirt::find($id);
        $shirt->delete();
        return redirect('/admin')->with('success', 'Post Deleted!');
    }

    /**
     * gets list of unique colors from shirts table
     * @return string[]
     */
    public function generateColorList() {
        return Shirt::all()->unique('color')->pluck('color');
    }
}
