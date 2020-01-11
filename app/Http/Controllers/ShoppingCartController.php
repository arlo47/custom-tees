<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\ShirtsController;
use Auth;


class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //Fetch user's shopping cart. Creates new if doesn't exist
    public function loadShoppingCart($userId)
    {
        $shoppingCartQuery = ShoppingCart::query();
        $shoppingCartQuery->where('user_id', $userId);
        //Check if query is not empty
        if(!isset($shoppingCartQuery)){
            return $shoppingCartQuery;
        }
        else{
            return null;
        }

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
    public function store(Request $request, $shirtId)
    {   
        $userId = Auth::id();
        $shoppingCart = ShoppingCart::where('user_id', $userId);
        if(isset($shoppingCart)){
            $cartItem = $shoppingCart->where('product_id', $shirtId)->first();
            if(isset($cartItem)){
                $cartItem->quantity++;
            }
            else{
                $cartRow = new ShoppingCart;
                $cartRow->user_id = $userId;
                $cartRow->product_id = $shirtId;
                $cartRow->quantity = 1;
                $cartRow->save();
            }
        }
        //$shoppingCart->where('product_id', $request->input('id'));

        return view('about');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart, $userId)
    {
        $shoppingCartQuery = ShoppingCart::where('user_id', $userId)->get();
        $shoppingCart = [];
        foreach($shoppingCartQuery as $cartItem){
            $shirt = app('App\Http\Controllers\ShirtsController')->shirtById($cartItem->product_id);
            array_push($shoppingCart,$shirt);
        }
        return view('shoppingcart')->with('shoppingCart', $shoppingCart);
    }


    public function addItem(){

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        //
    }
}
