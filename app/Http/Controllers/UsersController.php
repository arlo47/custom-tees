<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shirt;
use App\Http\Controllers\ShirtsController;
use App\Http\Controllers\ShoppingCartController;

class UsersController extends Controller
{   
    public function checkUser()
    {    
        if(Auth::check())
        {   $user = Auth::user();
            $adminId = 1;
            $userId = Auth::id();
            $shirts = Shirt::orderBy('name', 'desc')->paginate(9);
            if($userId == $adminId){
                return view('admin')->with('shirts', $shirts)
                                    ->with('user', $user);
            }
            else{
                $shoppingCart = app('App\Http\Controllers\ShoppingCartController')->loadShoppingCart($userId);
                return view('catalog')->with('user', $user)
                                      ->with('shirts',$shirts)
                                      ->with('shoppingCart', $shoppingCart);  
            }
        }
        else{
            return view('index')->with('shirts', $shirts);
        }
    }
}

?>
