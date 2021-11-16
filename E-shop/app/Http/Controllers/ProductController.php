<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productlist = Product::all();
        return view('info')->with('productlist',$productlist);
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

    public function filter(Request $request)
    {
        if(!$request->low_price){
            $request->low_price = 0;
        }
        if(!$request->high_price){
            $request->high_price = PHP_INT_MAX;
        }
        $itemslist = Product::whereBetween('price', [$request->low_price, $request->high_price])->paginate(8);
        $ascitemslist = Product::where('category','=',2)->orderBy('price', 'ASC')->paginate(8);
        $descitemslist = Product::where('category','=',2)->orderBy('price', 'DESC')->paginate(8);

        $category = "Filtrovane";
        $url_link = 'postele';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('ascitemslist', $ascitemslist)
                                ->with('descitemslist', $descitemslist)
                                ->with('category',$category)
                                ->with('url_link', $url_link);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_bed($id)
    {
        $product = Product::find($id);
        $recenzia = Message::all()->where('product_id' ,'=',$id);

        return view('info')->with('product',$product)
                            ->with('recenzia',$recenzia);

    }

    public function show_table($id)
    {
        $product = Product::find($id);
        $recenzia = Message::all()->where('product_id' ,'=',$id);

        return view('info')->with('product',$product)
                            ->with('recenzia',$recenzia);
    }

    public function show_chair($id)
    {
        $product = Product::find($id);
        $recenzia = Message::all()->where('product_id' ,'=',$id);

        return view('info')->with('product',$product)
                            ->with('recenzia',$recenzia);
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


    public function display_beds()
    {

        $itemslist = Product::where('category','=',2)->paginate(8);
        $ascitemslist = Product::where('category','=',2)->orderBy('price', 'ASC')->paginate(8);
        $descitemslist = Product::where('category','=',2)->orderBy('price', 'DESC')->paginate(8);

        $category = "Postele";
        $url_link = 'postele';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('ascitemslist', $ascitemslist)
                                ->with('descitemslist', $descitemslist)
                                ->with('category',$category)
                                ->with('url_link', $url_link);

    }

    public function display_searched()
    {
        if(request()->has('search')) {
            $itemslist = Product::where([['title', 'LIKE', '%' . request('search') . '%']])->paginate(8);
            $itemslist->withPath('?search='.request('search'));
            $ascitemslist = Product::where([['title', 'LIKE', '%' . request('search') . '%']])->orderBy('price', 'ASC')->paginate(8);
            $descitemslist = Product::where([['title', 'LIKE', '%' . request('search') . '%']])->orderBy('price', 'DESC')->paginate(8);
        }
        else {
             $itemslist = Product::paginate(8);
            $ascitemslist = Product::orderBy('price', 'ASC')->paginate(8);
            $descitemslist = Product::orderBy('price', 'DESC')->paginate(8);
        }



        $category = "Vyhladane";
        $url_link = 'postele';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('ascitemslist', $ascitemslist)
                                ->with('descitemslist', $descitemslist)
                                ->with('category',$category)
                                ->with('url_link', $url_link);

    }

    public function display_tables()
    {

        $itemslist = Product::where('category','=',1)->paginate(8);
        $ascitemslist = Product::where('category','=',1)->orderBy('price', 'ASC')->paginate(8);
        $descitemslist = Product::where('category','=',1)->orderBy('price', 'DESC')->paginate(8);

        $category ='Stoly';
        $url_link = 'stoly';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('ascitemslist', $ascitemslist)
                                ->with('descitemslist', $descitemslist)
                                ->with('category',$category)
                                ->with('url_link', $url_link);

    }

    public function display_chairs()
    {

        $itemslist = Product::where('category','=',0)->paginate(8);
        $ascitemslist = Product::where('category','=',0)->orderBy('price', 'ASC')->paginate(8);
        $descitemslist = Product::where('category','=',0)->orderBy('price', 'DESC')->paginate(8);

        $category = 'Stoličky';
        $url_link = 'stolicky';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('ascitemslist', $ascitemslist)
                                ->with('descitemslist', $descitemslist)
                                ->with('category',$category)
                                ->with('url_link', $url_link);
    }
}
