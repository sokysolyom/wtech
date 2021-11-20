<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



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

    public function zhrnutie()
    {
        return view('zhrnutie');
    }

    public function doprava_back()
    {
        return view('vyber_dopravy');
    }

    public function doprava(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'requied',
            'telephone' => 'required'
        ]);

        if( Auth::user()){
            $fullname = Auth::user()->name;
        }
        else {
            $fullname = $request->name + $request->surname;

        }

        Order::create(['Name' =>  $fullname, 'Adress' => $request->address, 'Email' => $request->email, 'Telephone' => $request->telephone]);
        return redirect("vyber_dopravy");
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

        return view('adress')->with('contact',$contact_list);;
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
