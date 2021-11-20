<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitems;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;
use App\Models\Cart_items;

class OrderController extends Controller
{

    public function create_order(Request $request)
    {

        if (Auth::check()){


            $cart_id = request('cart_id');
            $order = Order::where('cart_id', '=', $cart_id)->first();
            if ($order === null)
            {
                $order = Order::create(
                    [
                        'cart_id' => $cart_id,
                        'Name' => "",
                        'Adress' => "",
                        'Email' => "",
                        'Telephone' => "",
                        'Payment' => "",
                        'Delivery' => "",
                    ]
                );
            }

            else
            {
                echo("UZ JE");
            }

            $data = request('pocet_objektov');
            $list_of_products = [];
            echo("DATA ");

            $list = Cart_items::all()->where('cart_id',$cart_id);
            $x = 0;
            Orderitems::where('order_id',$order->id)->delete();

            foreach ($list as $item)
            {
                echo($item);

                $items =  Orderitems::where('product',$item->product)->where('order_id',$order->id)->first();
                if ($items === null){
                    Orderitems::create(
                        [
                            'product' => $item->product,
                            'counter' => $item->counter,
                            'order_id' => $order->id,
                        ]
                        );

                    array_push($list_of_products,$item);
                }
                else
                {
                    if ($items->counter !== $item->counter )
                    {
                        $items->counter = $item->counter;
                        $items->save();
                    }
                }

            }


            $id = Auth::user()->id;
            return redirect("/adresa/$id");
        }

        else
        {

            $kosik = Session::get('cart');
            $cart_id = Session::get('_token');

            if (Session::exists('order'))
            {

                $objednavka = Session::get('order');
                $newlist = [];
                Session::put('order', $newlist);
                foreach ($objednavka as $item)
                {

                    for ($x = 0; $x < count($item); $x++) {
                        if ($x <= 5){
                            $contact = [$item[$x][0], $item[$x][1]];
                            array_push($newlist,$contact);
                        }
                        else
                        {
                            foreach ($kosik as $kosikitem)
                            {
                                if ($kosikitem[0] === $item[$x][0])
                                {
                                    $item[$x][1] = $kosikitem[1];
                                }

                            }
                        }
                    }
                    echo(count($item));

                    echo($item[6][0]);
                    echo($item[6][1]);
                    echo(" ");
                    echo($item[7][0]);
                    echo($item[7][1]);


                    for ($y = 6; $y < count($item); $y++) {
                        $orderitem = [$item[$y][0], $item[$y][1]];
                        array_push($newlist,$orderitem);

                    }

                    Session::push('order',$newlist);
                    Session::save();



                    // $checked = 0;

                    // foreach ($kosik as $kosikitem){
                    //     $variable = 0;


                    //     $variable = $variable + 1;
                    //     if ($variable >= 7)
                    //     {
                    //         if ($kosikitem[0] == $item[0])
                    //         {
                    //             $i[1] = $kosikitem[1];
                    //             $newitem = [$i[0],$i[1]];
                    //             array_push($newlist,$newitem);

                    //         }

                    //     }
                    //     else
                    //     {
                    //         if ($checked === 0)
                    //         {
                    //             $new_is = [$item[0],$item[1]];
                    //             echo($item[0]);
                    //             echo("->");
                    //             echo($item[1]);
                    //             echo(" ");
                    //             array_push($newlist,$new_is);

                    //         }
                    //     }


                    // }
                    // $checked = 1;

                }


            }
            else
            {
                $order =[];
                Session::put('order', $order);
                Session::save();
                $new = [];
                array_push($new,["Name"," "]);
                array_push($new,["Email"," "]);
                array_push($new,["Address"," "]);
                array_push($new,["Telephone"," "]);
                array_push($new,["Payment"," "]);
                array_push($new,["Billing"," "]);
                foreach ($kosik as $item)
                {

                    array_push($new,$item);
                }



                Session::push('order',$new);
                Session::save();


            }
            #return redirect("/adresa");
        }

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
