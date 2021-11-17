<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_items;
use App\Models\Product;
use App\Models\User_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    
    public function add_to_cart(Request $request){

        $user = Auth::user();
        $id = Auth::id();
        $product_id = request('id');
        $count = request('quantity');
        echo($product_id);
        
        $cart = User_cart::firstOrCreate([
            'user_id' => $id,
        ]);
        $new_id = $cart->id;
        
        
        
        $cartitem = new Cart_items;
        $cartitem->product = $product_id;
        $cartitem->counter = $count;
        $cartitem->cart_id = $new_id;

        $cartitem->save();
        return redirect('/kosik');
        
    }


    public function kosik()
    {
        $id = Auth::id();
        
        $cart = User_cart::all()->where('id','=',$id);
        
        $cart = $cart->first();

        
        $items = Cart_items::all()->where('cart_id','=',$cart->id);
        

        
        
        $list = [];
        foreach ($items as $item){
            $number = $item->product;
            $produkt = Product::all()->where('id','=',$number);
            
            array_push($list,$produkt->first());
        }
        
        
        return view('kosik')->with('items',$list);
    }

    public function delete_item(){

        $product_id = request('id');

        $user_id = Auth::id();

        $cart = User_cart::all()->where('id','=',$user_id);

        $cart = $cart->first();

        $items = Cart_items::all()->where('cart_id','=',$cart->id);

        foreach ($items as $item){
            $number = $item->product;
            echo($number);
            echo(" ");
            echo($product_id);
            echo(" ");
            if ($number == $product_id){
                echo("som tu ");
                $id_to_delete = $item->id;
            }
        }

        $del = Cart_items::find($id_to_delete);

        $del->delete();

        return redirect('/kosik');
    }
}
