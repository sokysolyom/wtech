<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart_items;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;


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
        $newslist = Product::orderBy('price', 'DESC')->limit(4)->get();

        $url_link = '/products';

        return view('welcome')->with('suggestedlist', $suggestedlist)
                            ->with('newslist', $newslist)
                            ->with('url_link', $url_link);

    }

    public function kosik()
    {
        return view('kosik');

    }

    public function zhrnutie($id)
    {
        $order = Order::where('id','=',$id)->first();
        $ldate = date('Y-m-d H:i:s');

        $items = Cart_items::all()->where('cart_id','=',$order->cart_id);

            $list = [];
            foreach ($items as $item){
                $number = $item->product;
                $counter = $item->counter;
                $item = Product::all()->where('id','=',$number);
                $item = $item->first();
                $produkt = [$item,$counter];
                array_push($list,$produkt);

            }

        return view('zhrnutie')->with('order', $order)
                                ->with('ldate', $ldate)
                                ->with('items',$list);
    }

    public function doprava_back()
    {
        return view('vyber_dopravy');
    }

    public function doprava(Request $request, $id)
    {

        $order = Order::where('id','=',$id)->first();

        $order->Payment = $request->payment;
        $order->Delivery = $request->delivery;
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

    public function adress()
    {
        return view('adress');
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
        //
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
