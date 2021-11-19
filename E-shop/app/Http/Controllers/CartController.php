<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_items;
use App\Models\Product;
use App\Models\User_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\Php;

class CartController extends Controller
{
    
    public function add_to_cart(Request $request){

        

        if (Auth::check()) {
            $user = Auth::user();
        
            $id = Auth::id();
            $product_id = request('id');
            $count = request('quantity');
            
            
            $cart = User_cart::firstOrCreate([
                'user_id' => $id,
            ]);
            $new_id = $cart->id;

            $exact_product = Cart_items::where('product', '=', $product_id);
            $exact_product = $exact_product->first();
            
            if ($exact_product == null) {
                $cartitem = new Cart_items;
                $cartitem->product = $product_id;
                $cartitem->counter = $count;
                $cartitem->cart_id = $new_id;

                $cartitem->save();
            }
            else{
                $exact_product->counter = $exact_product->counter +$count;
               
                $exact_product->save();
            }
            
            return redirect('/kosik');
        }

        else
        {
       
            if (Session::exists('cart')) 
            {
                $variable = 1;
                $id = request('id');
                $counter = request('quantity');
                $kosik = Session::get('cart');
                $newkosik=[];
                foreach ($kosik as $item){
                    if ($item[0] === $id){
                        $item[1] = $item[1] + $counter;
                        $variable = 0;
                        
                    }
                    array_push($newkosik,$item);
                }
                if ($variable == 1)
                {
                    $new_item = [$id,$counter];

                    array_push($newkosik,$new_item);
                }
                

                Session::put('cart',$newkosik);
                Session::save();
                return redirect('/kosik');
            }

            else
            {   
                $cart =[];
                Session::put('cart', $cart);
                Session::save();

                $id = request('id');
                $counter = request('quantity');
   
                $cartitem = [$id,$counter];
                
                Session::push('cart',$cartitem);
                Session::save();
              
                return redirect('/kosik');
                
            }
        }
        
        
        
        
    }


    public function kosik(Request $request)
    {

        $id = Auth::id();
        
        $cart = User_cart::all()->where('id','=',$id);

        if (count($cart) == 0)
            {
                $list = [];
            }

        if (Auth::check()) 
        {
            $cart = $cart->first();
            $items = Cart_items::all()->where('cart_id','=',$cart->id);
        
            $list = [];
            foreach ($items as $item){
                $number = $item->product;
                $counter = $item->counter;
                $item = Product::all()->where('id','=',$number);
                $item = $item->first();
                $produkt = [$item,$counter];
                array_push($list,$produkt);
                
            }
            return view('kosik')->with('items',$list)
            ->with('cart_id',$cart->id);
        }
        

        else
        {

            $value = Session::get('cart');
            
            if (Session::has('cart'))
            {
                foreach($value as $item)
                {
                    $product = $item[0];
                    $counter = $item[1];
                    $item = Product::where('id',$product);
                    $item = $item->first();
                    $produkt = [$item,$counter];
                    
                    array_push($list,$produkt);
                }
            }
            else
            {
                $list = [];
            }
            $cart_id = 0;
            return view('kosik')->with('items',$list)
            ->with('cart_id',$cart_id);
            
  
        }
        
        
        
        
       
    }

    public function delete_item(){

        $product_id = request('id');

        $user_id = Auth::id();

        if (Auth::check()) 
        {
            $cart = User_cart::all()->where('id','=',$user_id);

            $cart = $cart->first();

            $items = Cart_items::all()->where('cart_id','=',$cart->id);

            
            foreach ($items as $item){
                
                $number = $item->product;
                if ($number == $product_id)
                {
                    $id_to_delete = $item->id;
                }
            }
            
            $del = Cart_items::find($id_to_delete);

            $del->delete();
        }

        else
        {
            $value = Session::get('cart');
            
            if (Session::has('cart'))
            {
                Session::pull('cart');
                $newlist = [];
                foreach($value as $item)
                {
                    $product = $item[0];
                    $counter = $item[1];
                    if ($product == $product_id)
                    {
                        $item[0] = null;
                        $item[1] = null;
                    }
                    else
                    {
                        
                        
                        $cartitem = [$item[0],$item[1]];
                        
                        Session::push('cart',$cartitem);
                        Session::save();
                       
                    }
                }
            }
            else
            {
                $list = [];
            }

        }

        

        return redirect('/kosik');
    }


    public function update_kosik(Request $request){
        
        $product_id = $request->product;
        $counter =  $request->count;
        $cart_id = $request->cart;

        if (Auth::check())
        {
            $user_id = Auth::id();
            $cart = User_cart::all()->where('id','=',$user_id);

            $cart = $cart->first();

            $items = Cart_items::all()->where('cart_id','=',$cart_id);

            
            foreach ($items as $item){
                
                $number = $item->product;
                if ($number == $product_id)
                {
                    $id_to_update = $item->id;
                }
            }
            
            $updated = Cart_items::find($id_to_update);
            $updated->counter = $counter;

            $updated->save();
            return response()->json(['success'=>$counter],);

        }
        else
        {
            $value = Session::get('cart');
            
            
            Session::pull('cart');
            $newlist = [];
            
            foreach($value as $item)
            {
                $product = $item[0];
                
                echo($product);
                
                if ($product == $product_id)
                {
                    $item[1] = $counter;
                    $cartitem = [$item[0],$counter];
                    Session::push('cart',$cartitem);
                    Session::save();
                    
                }
                else
                {
                    $cartitem = [$item[0],$item[1]];
                    Session::push('cart',$cartitem);
                    Session::save();
                    
                    
                }
                
            }
           
            Session::save();
            return response()->json(['success'=>$counter],);
            
           
        }
        
    }
}
