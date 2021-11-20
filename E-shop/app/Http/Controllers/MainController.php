<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart_items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Models\Orderitems;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestedlist = Product::inRandomOrder()->limit(4)->get();
        $carousellist = Product::inRandomOrder()->limit(3)->get();
        $newslist = Product::orderBy('price', 'DESC')->limit(4)->get();

        $url_link = '/products';

        return view('welcome')->with('suggestedlist', $suggestedlist)
                            ->with('newslist', $newslist)
                            ->with('carousellist', $carousellist)
                            ->with('url_link', $url_link);

    }

    public function kosik()
    {
        return view('kosik');

    }

    public function zhrnutie($id)
    {

        if (Auth::check())
        {
            $order = Order::where('id','=',$id)->first();
            $ldate = date('Y-m-d H:i:s');

            $items = Cart_items::all()->where('cart_id','=',$order->cart_id);

            $contact_list = [];
            array_push($contact_list, $order->Name);
            array_push($contact_list, '');
            array_push($contact_list, $order->Adress);
            array_push($contact_list, $order->Email);
            array_push($contact_list, $order->Telephone);
            array_push($contact_list, $order->Payment);
            array_push($contact_list, $order->Delivery);

                $list = [];
                foreach ($items as $item){
                    $number = $item->product;
                    $counter = $item->counter;
                    $item = Product::all()->where('id','=',$number);
                    $item = $item->first();
                    $produkt = [$item,$counter];
                    array_push($list,$produkt);

                }

            return view('zhrnutie')->with('contact',$contact_list)
                                ->with('id', $order->id)
                                ->with('product',$list);

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

            $fullname = $name." ".$surname;

            $token = Session::get('_token');
            $token = intval($token);


            $list = [];

            foreach ($product_list as $item){
                $number = $item[0];
                $counter = $item[1];
                $item = Product::all()->where('id','=',$number);
                $item = $item->first();
                $produkt = [$item,$counter];

                array_push($list,$produkt);


            }
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

            return view('zhrnutie')->with('contact',$contact_list)
                                ->with('product',$list);
        }

    }

    public function zhrnutie_no_logged()
    {

        if (Auth::check())
        {
            $order = Order::where('id','=',$id)->first();
            $ldate = date('Y-m-d H:i:s');

            $items = Cart_items::all()->where('cart_id','=',$order->cart_id);

            $contact_list = [];
            array_push($contact_list, $order->Name);
            array_push($contact_list, '');
            array_push($contact_list, $order->Adress);
            array_push($contact_list, $order->Email);
            array_push($contact_list, $order->Telephone);
            array_push($contact_list, $order->Payment);
            array_push($contact_list, $order->Delivery);

                $list = [];
                foreach ($items as $item){
                    $number = $item->product;
                    $counter = $item->counter;
                    $item = Product::all()->where('id','=',$number);
                    $item = $item->first();
                    $produkt = [$item,$counter];
                    array_push($list,$produkt);

                }

            return view('zhrnutie')->with('contact',$contact_list)
                                ->with('id', $order->id)
                                ->with('product',$list);

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

            $fullname = $name." ".$surname;

            $token = Session::get('_token');
            $token = intval($token);


            $list = [];

            foreach ($product_list as $item){
                $number = $item[0];
                $counter = $item[1];
                $item = Product::all()->where('id','=',$number);
                $item = $item->first();
                $produkt = [$item,$counter];

                array_push($list,$produkt);


            }
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

            return view('zhrnutie')->with('contact',$contact_list)
                                ->with('product',$list);
        }

    }

    public function doprava_back($id)
    {
        if (Auth::check())
        {
            $order = Order::where('id','=',$id)->first();
            $choices_list = [];
            array_push($choices_list,$order->Payment);
            array_push($choices_list,$order->Delivery);
            $order_id = $order->id;

            return view('vyber_dopravy')->with('choices',$choices_list)->with('order_id', $order_id);
        }
        else
        {
            $objednavka = Session::get('order');
            $choices_list = [];
            foreach ($objednavka as $item)
            {
                array_push($choices_list,$item[5][1]);
                array_push($choices_list,$item[6][1]);
            }

            return view('/vyber_dopravy')->with('choices',$choices_list);
        }

    }

    public function doprava_back_no_logged()
    {
        if (Auth::check())
        {
            $order = Order::where('id','=',$id)->first();
            $choices_list = [];
            array_push($choices_list,$order->Payment);
            array_push($choices_list,$order->Delivery);
            $order_id = $order->id;

            return view('vyber_dopravy')->with('choices',$choices_list)->with('order_id', $order_id);
        }
        else
        {
            $objednavka = Session::get('order');
            $choices_list = [];
            foreach ($objednavka as $item)
            {
                array_push($choices_list,$item[5][1]);
                array_push($choices_list,$item[6][1]);
            }

            return view('/vyber_dopravy')->with('choices',$choices_list);
        }

    }

    public function doprava(Request $request, $id)
    {

        $order = Order::where('id','=',$id)->first();

        $order->Payment = $request->platba;
        $order->Delivery = $request->doprava;
        $order->save();
        $request->session()->flash('message', 'Úloha bola úspešne zmenená.');

        return redirect("/zhrnutie/$id");
    }

    public function adresa(Request $request, $id)
    {
        $order = Order::where('id','=',$id)->first();

        $request->validate([
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required'
        ]);

        if( Auth::user()){
            $fullname = Auth::user()->name;
        }
        else {
            $fullname = $request->name + $request->surname;
        }

        $order->Adress = $request->address;
        $order->Email = $request->email;
        $order->Telephone = $request->telephone;
        $order->Name = $fullname;
        $order->save();
        $request->session()->flash('message', 'Úloha bola úspešne zmenená.');

        return redirect("/doprava/$id");
    }

    public function tables_Page()
    {
        return view('tablesPage');
    }

    public function register()
    {
        return view('register');
    }

    public function info($id)
    {
        $product = Product::find($id);
        return view('info')->with('product',$product);
    }

    public function chairs_Page()
    {
        return view('chairsPage');
    }

    public function beds_Page()
    {


        return view('bedsPage');
    }

    public function adress($id)
    {
        if (Auth::check())
        {

            $order = Order::where('id','=',$id)->first();
            $contact_list = [];
            array_push($contact_list,$fullname = Auth::user()->name);
            array_push($contact_list,$fullname = Auth::user()->name);
            array_push($contact_list,$order->Adress);
            array_push($contact_list,$order->Email);
            array_push($contact_list,$order->Telephone);

            return view('adress')->with('contact',$contact_list)->with('id', $order->id);
        }
        else
        {
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

            return view('adress')->with('contact',$contact_list);
        }

    }

    public function adress_no_logged()
    {
        if (Auth::check())
        {

            $order = Order::where('id','=',$id)->first();
            $contact_list = [];
            array_push($contact_list,$fullname = Auth::user()->name);
            array_push($contact_list,$fullname = Auth::user()->name);
            array_push($contact_list,$order->Adress);
            array_push($contact_list,$order->Email);
            array_push($contact_list,$order->Telephone);

            return view('adress')->with('contact',$contact_list)->with('id', $order->id);
        }
        else
        {
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

            return view('adress')->with('contact',$contact_list);
        }

    }

}
