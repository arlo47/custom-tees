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
        if(!isset($userId)){
            return view('/auth/login')->with('error','Please login or register to add product');
        }
        else{
            $shoppingCart = ShoppingCart::where('user_id', $userId);
            if(isset($shoppingCart)){
                $cartItem = $shoppingCart->where('product_id', $shirtId)->first();
                if(isset($cartItem)){
                    //$quantity = $cartItem->quantity;
                    $cartItem->quantity++;
                    $cartItem->save();
                }
                else{
                    $cartRow = new ShoppingCart;
                    $cartRow->user_id = $userId;
                    $cartRow->product_id = $shirtId;
                    $cartRow->quantity = 1;
                    $cartRow->save();
                }
            }
        }
        //$shoppingCart->where('product_id', $request->input('id'));

        return redirect('/about')->with('success', 'Shirt Added to Cart!');;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $userId = Auth::id();
        if(!isset($userId)){
            return view('/auth/login')->with('error','Please login to view shopping cart');
        }
        else{
        $shoppingCartQuery = ShoppingCart::where('user_id', Auth::id())->get();
        $shoppingCart = [];
        $shoppingCartTotal = 0;
        foreach($shoppingCartQuery as $cartItem){
            $shirtQuantity = $cartItem->quantity;
            $shirt = app('App\Http\Controllers\ShirtsController')->shirtById($cartItem->product_id);
            $shirt->quantity = $shirtQuantity;
            // $tempCart = [];
            // array_push($tempCart, $shirt,$shirtQuantity);
            array_push($shoppingCart,$shirt);
        }

        foreach($shoppingCart as $shirt){
            $shoppingCartTotal += ($shirt->price) * ($shirt->quantity); 
        }
        //dd($shoppingCart);
        return view('shoppingcart')->with('shoppingCart', $shoppingCart)
                                    ->with('shoppingCartTotal', $shoppingCartTotal);
        }
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

    public function removeItem($shirtId){
        $shoppingCartQuery = ShoppingCart::where('user_id', Auth::id())->get();
        $shoppingCart = $shoppingCartQuery->where('product_id',$shirtId)->first();
        $shoppingCart->delete();

        return $this->show();
    }
}
