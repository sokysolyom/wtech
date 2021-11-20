<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitems;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User_cart;
use App\Models\Cart_items;




use Illuminate\Http\Request;


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

            }

            $data = request('pocet_objektov');
            $list_of_products = [];

            $list = Cart_items::all()->where('cart_id',$cart_id);
            $x = 0;
            Orderitems::where('order_id',$order->id)->delete();

            foreach ($list as $item)
            {

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
                $contact_list = [];
                Session::put('order', $newlist);

                foreach ($objednavka as $item)
                {

                    for ($x = 0; $x < count($item); $x++)
                    {
                        if ($x <= 6){
                            $contact = [$item[$x][0], $item[$x][1]];
                            array_push($newlist,$contact);

                            array_push($contact_list,$contact[1]);
                            $contact = [$item[$x][0], $item[$x][1]];
                        }
                        else
                        {

                        }
                    }
                    foreach ($kosik as $kosikitem)
                    {
                        array_push($newlist,$kosikitem);

                    }



                    Session::push('order',$newlist);
                    Session::save();

                }

                return view("adress")->with('contact',$contact_list);

            }
            else
            {
                $order =[];
                Session::put('order', $order);

                $new = [];
                array_push($new,["Name",""]);
                array_push($new,["Surname",""]);
                array_push($new,["Address",""]);
                array_push($new,["Email",""]);
                array_push($new,["Telephone",""]);
                array_push($new,["Payment"," "]);
                array_push($new,["Billing"," "]);
                foreach ($kosik as $item)
                {
                    array_push($new,$item);
                }

                Session::push('order',$new);
                Session::save();

                $objednavka = Session::get('order');
                $contact_list = [];
                foreach ($objednavka as $item)
                {
                    for ($x = 0; $x < count($item); $x++)
                    {
                        if ($x <= 6){
                            $contact = [$item[$x][0], $item[$x][1]];
                            array_push($contact_list,$contact[1]);
                        }
                    }
                }
                return view("adress")->with('contact',$contact_list);
            }
        }
    }


    public function contact()
    {
        if (Auth::check())
        {
        }

       else
       {
            $kosik = Session::get('cart');

            $name = request('name');
            $surname = request('surname');
            $address = request('address');
            $email = request('email');
            $telephone = request('telephone');
            $objednavka = Session::get('order');
            $newlist = [];
            $contact_list = [];
            Session::put('order', $newlist);

            foreach ($objednavka as $item)
            {


                for ($x = 0; $x < count($item); $x++)
                {
                    if ($x <= 6){
                        if ($x === 0)
                        {
                            $contact = ["Name", $name];
                        }
                        if ($x === 1)
                        {
                            $contact = ["Surname", $surname];
                        }
                        if ($x === 2)
                        {
                            $contact = ["Address", $address];
                        }
                        if ($x === 3)
                        {
                            $contact = ["Email", $email];
                        }
                        if ($x === 4)
                        {
                            $contact = ["Telephone", $telephone];
                        }
                        if ($x === 5)
                        {
                            $contact = ["Payment", $item[$x][1]];
                        }
                        if ($x === 6)
                        {
                            $contact = ["Billing", $item[$x][1]];
                        }
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

                for ($y = 7; $y < count($item); $y++) {
                    $orderitem = [$item[$y][0], $item[$y][1]];
                    array_push($newlist,$orderitem);

                }

                Session::push('order',$newlist);
                Session::save();

            }

            return redirect("/doprava");
       }
    }


    public function zhrnutie()
    {
        $doprava = request('doprava');
        $platba = request('platba');
        $objednavka = Session::get('order');
        $kosik = Session::get('cart');
        $newlist = [];
        $contact_list = [];
        Session::put('order', $newlist);

        foreach ($objednavka as $item)
        {


            for ($x = 0; $x < count($item); $x++)
            {
                if ($x <= 6){
                    if ($x === 0)
                    {
                        $contact = ["Name", $item[$x][1]];
                    }
                    if ($x === 1)
                    {
                        $contact = ["Surname", $item[$x][1]];
                    }
                    if ($x === 2)
                    {
                        $contact = ["Address", $item[$x][1]];
                    }
                    if ($x === 3)
                    {
                        $contact = ["Email", $item[$x][1]];
                    }
                    if ($x === 4)
                    {
                        $contact = ["Telephone", $item[$x][1]];
                    }
                    if ($x === 5)
                    {
                        $contact = ["Payment", $platba];
                    }
                    if ($x === 6)
                    {
                        $contact = ["Billing", $doprava];
                    }
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

            for ($y = 7; $y < count($item); $y++) {
                $orderitem = [$item[$y][0], $item[$y][1]];
                array_push($newlist,$orderitem);

            }

            Session::push('order',$newlist);
            Session::save();

        }

        return redirect('/zhrnutie');

    }


    public function order_to_DB()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->id;
            $kosik = User_cart::where('id', '=', $user_id)->first();
            $list_of_items_to_delete = Cart_items::all()->where('cart_id', '=',$kosik->id);

            foreach ($list_of_items_to_delete as $item_to_delete)
            {

                $id_to_delete = $item_to_delete->id;
                $del = Cart_items::find($id_to_delete);
                $del->delete();
            }
            return redirect('/');

        }
        else
        {
            $objednavka = Session::get('order');


            $contact_list = [];
            $product_list=[];
            foreach ($objednavka as $item)
            {
                for ($x = 0; $x < count($item); $x++)
                {
                    if ($x === 0)
                    {
                        $name = $item[$x][1];
                    }
                    elseif ($x === 1)
                    {
                        $surname = $item[$x][1];
                    }
                    elseif ($x === 2)
                    {
                        $address = $item[$x][1];
                    }
                    elseif ($x === 3)
                    {
                        $email = $item[$x][1];
                    }
                    elseif ($x === 4)
                    {
                        $telephone = $item[$x][1];
                    }
                    elseif ($x === 5)
                    {
                        $payment = $item[$x][1];
                    }
                    elseif ($x === 6)
                    {
                        $delivery = $item[$x][1];
                    }
                    else
                    {
                        $produkt = [$item[$x][0], $item[$x][1]];
                        array_push($product_list,$produkt);
                    }

                }
            }

            $order = Order::all()->where('telephone',$telephone);
            $order = $order->first();
            $fullname = $name." ".$surname;

            $token = Session::get('_token');
            $token = intval($token);
            $order = Order::create(
                [
                    'cart_id' => $token,
                    'Name' => $fullname,
                    'Adress' => $address,
                    'Email' => $email,
                    'Telephone' => $telephone,
                    'Payment' => $payment,
                    'Delivery' => $delivery,
                ]
            );
            $list = [];
            $ORDERID = $order->id;
            foreach ($product_list as $item){
                $number = $item[0];
                $counter = $item[1];
                $item = Product::all()->where('id','=',$number);
                $item = $item->first();
                $produkt = [$item,$counter];

                array_push($list,$produkt);
                Orderitems::create(
                    [
                        'product' => $number,
                        'counter' => $counter,
                        'order_id' => $ORDERID,
                    ]
                    );

            }

            Session::flush();
        }

        return redirect('/');
    }


}
