<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart_items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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


    public function new_item()
    {
        return view('newProduct');
    }

    public function store_item(Request $request)
    {
        echo($request->price);
        echo($request->image);

        echo($path);
    if (Auth::user() && Auth::user()->is_admin) {
        $validation = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'parametre' => 'required',
            'colour' => 'required',
            'rozmery' => 'required',
            'material' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png|max:4096'
        ]);
        $file = $validation['image'];
        $fileName = md5($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
        $request->image->storeAs('public/images', $fileName);
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'parametre' => $request->parametre,
            'colour' => $request->colour,
            'rozmery' => $request->rozmery,
            'material' => $request->material,
            'category' => $request->category,
            'image' => $fileName]);
        return redirect('/products/' . $product->id);
    }else {
        return redirect('/');
    }
    }

    public function change_item(Request $request, $id)
    {
        $product = Product::find($id);

        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'parametre' => 'required',
            'colour' => 'required',
            'rozmery' => 'required',
            'material' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png|max:4096'
        ]);

        if ($request->image){
            $file = $validation['image'];
            $fileName = md5($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
            $request->image->storeAs('public/images', $fileName);
            $product->image = $fileName;
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->parametre = $request->parametre;
        $product->colour = $request->colour;
        $product->rozmery = $request->rozmery;
        $product->material = $request->material;
        $product->save();
        $request->session()->flash('message', 'Úloha bola úspešne zmenená.');

        return redirect("/products/$id");
    }

    public function delete_item(Request $request, Product $product)
    {
        $id = $product->id;

        $cartitems = Cart_items::all()->where('product','=',$id);
        foreach ($cartitems as $item){
            $item->delete();
        }

        $listmsg = Message::all()->where('product_id','=',$id);
        foreach ($listmsg as $msg){
            $msg->delete();
        }


        $product->delete();
        $request->session()->flash('message', 'Úloha bola úspešne vymazaná.');
        return redirect('/');
    }

    public function edit_item($id)
    {
        $product = Product::find($id);

        return view('edit')->with('product',$product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_item($id)
    {
        $product = Product::find($id);
        $recenzia = Message::all()->where('product_id' ,'=',$id);
        $suggestedlist = Product::inRandomOrder()->limit(4)->get();

        $url_link = '/products';
        $amount = 1;


        return view('info')->with('product',$product)
                            ->with('recenzia',$recenzia)
                            ->with('suggestedlist', $suggestedlist)
                            ->with('amount', $amount)
                            ->with('url_link', $url_link);

    }

    //TABLES

    public function display_tables()
    {

        $itemslist = Product::where('category','=',1)->paginate(8);

        $category = "Stoly";
        $url_link_new = '/stoly_new';
        $url_link_cheap = '/stoly_cheap';
        $url_link_luxury = '/stoly_luxury';
        $url_link = '/stoly';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_cheap_tables()
    {
        $itemslist = Product::where('category','=',1)->orderBy('price', 'ASC')->paginate(8);

        $category = "Stoly";
        $url_link_new = '/stoly_new';
        $url_link_cheap = '/stoly_cheap';
        $url_link_luxury = '/stoly_luxury';
        $url_link = '/stoly';

        return view('ItemsPageCheap')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_luxury_tables()
    {
        $itemslist = Product::where('category','=',1)->orderBy('price', 'DESC')->paginate(8);

        $category = "Stoly";
        $url_link_new = '/stoly_new';
        $url_link_cheap = '/stoly_cheap';
        $url_link_luxury = '/stoly_luxury';
        $url_link = '/stoly';
        return view('ItemsPageLuxury')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function tables_filter(Request $request)
    {
        //TODO add to database material and colour
        if(!$request->colour){
            $request->colour = ['cervena', 'modra', 'zlta', 'biela'];
        }
        if(!$request->material){
            $request->material = ['kov', 'plast', 'drevo', 'koza'];
        }
        if(!$request->low_price){
            $request->low_price = 0;
        }
        if(!$request->high_price){
            $request->high_price = PHP_INT_MAX;
        }
        $itemslist = Product::where('category','=',1)
                                ->whereBetween('price', [$request->low_price, $request->high_price])
                                ->whereIn('material', $request->material)
                                ->whereIn('colour', $request->colour)
                                ->paginate(8);

        $category = "Stoly";
        $url_link_new = '/stoly_new';
        $url_link_cheap = '/stoly_cheap';
        $url_link_luxury = '/stoly_luxury';
        $url_link = '/stoly';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);

    }



    //CHAIRS

    public function display_chairs()
    {

        $itemslist = Product::where('category','=',0)->paginate(8);

        $category = 'Stoličky';
        $url_link_new = '/stolicky_new';
        $url_link_cheap = '/stolicky_cheap';
        $url_link_luxury = '/stolicky_luxury';
        $url_link = '/stolicky';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_cheap_chairs()
    {
        $itemslist = Product::where('category','=',0)->orderBy('price', 'ASC')->paginate(8);

        $category = "Postele";
        $url_link_new = '/stolicky_new';
        $url_link_cheap = '/stolicky_cheap';
        $url_link_luxury = '/stolicky_luxury';
        $url_link = '/postele';

        return view('ItemsPageCheap')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_luxury_chairs()
    {
        $itemslist = Product::where('category','=',0)->orderBy('price', 'DESC')->paginate(8);

        $category = "Postele";
        $url_link_new = '/stolicky_new';
        $url_link_cheap = '/stolicky_cheap';
        $url_link_luxury = '/stolicky_luxury';
        $url_link = '/postele';

        return view('ItemsPageLuxury')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function chairs_filter(Request $request)
    {
        //TODO add to database material and colour
        if(!$request->colour){
            $request->colour = ['cervena', 'modra', 'zlta', 'biela'];
        }
        if(!$request->material){
            $request->material = ['kov', 'plast', 'drevo', 'koza'];
        }
        if(!$request->low_price){
            $request->low_price = 0;
        }
        if(!$request->high_price){
            $request->high_price = PHP_INT_MAX;
        }
        $itemslist = Product::where('category','=',0)
                                ->whereBetween('price', [$request->low_price, $request->high_price])
                                ->whereIn('material', $request->material)
                                ->whereIn('colour', $request->colour)
                                ->paginate(8);

        $category = "Stoličky";
        $url_link_new = '/stolicky_new';
        $url_link_cheap = '/stolicky_cheap';
        $url_link_luxury = '/stolicky_luxury';
        $url_link = '/stolicky';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);

    }

    //BEDS

    public function display_beds()
    {

        $itemslist = Product::where('category','=',2)->paginate(8);

        $category = "Postele";
        $url_link_new = '/postele_new';
        $url_link_cheap = '/postele_cheap';
        $url_link_luxury = '/postele_luxury';
        $url_link = '/postele';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);

    }

    public function display_cheap_beds()
    {
        $itemslist = Product::where('category','=',2)->orderBy('price', 'ASC')->paginate(8);

        $category = "Postele";
        $url_link_new = '/postele_new';
        $url_link_cheap = '/postele_cheap';
        $url_link_luxury = '/postele_luxury';
        $url_link = '/postele';

        return view('ItemsPageCheap')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_luxury_beds()
    {
        $itemslist = Product::where('category','=',2)->orderBy('price', 'DESC')->paginate(8);

        $category = "Postele";
        $url_link_new = '/postele_new';
        $url_link_cheap = '/postele_cheap';
        $url_link_luxury = '/postele_luxury';
        $url_link = '/postele';

        return view('ItemsPageLuxury')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function beds_filter(Request $request)
    {
        //TODO add to database material and colour
        if(!$request->colour){
            $request->colour = ['cervena', 'modra', 'zlta', 'biela'];
        }
        if(!$request->material){
            $request->material = ['kov', 'plast', 'drevo', 'koza'];
        }
        if(!$request->low_price){
            $request->low_price = 0;
        }
        if(!$request->high_price){
            $request->high_price = PHP_INT_MAX;
        }
        $itemslist = Product::where('category','=',2)
                                ->whereBetween('price', [$request->low_price, $request->high_price])
                                ->whereIn('material', $request->material)
                                ->whereIn('colour', $request->colour)
                                ->paginate(8);

        $category = "Postele";
        $url_link_new = '/postele_new';
        $url_link_cheap = '/postele_cheap';
        $url_link_luxury = '/postele_luxury';
        $url_link = '/postele';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);

    }

    //ALL PRODUCTS

    public function display_all()
    {
        if(request()->has('search')) {
            $itemslist = Product::where([['title', 'LIKE', '%' . request('search') . '%']])->paginate(8);
            $itemslist->withPath('?search='.request('search'));
        }
        else {
             $itemslist = Product::paginate(8);
        }



        $category = "Všetky";
        $url_link_new = '/products_new';
        $url_link_cheap = '/products_cheap';
        $url_link_luxury = '/products_luxury';
        $url_link = '/products';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);

    }


    public function display_cheap_all()
    {
        $itemslist = Product::orderBy('price', 'ASC')->paginate(8);

        $category = "Všetky";
        $url_link_new = '/products_new';
        $url_link_cheap = '/products_cheap';
        $url_link_luxury = '/products_luxury';
        $url_link = '/products';

        return view('ItemsPageCheap')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function display_luxury_all()
    {
        $itemslist = Product::orderBy('price', 'DESC')->paginate(8);

        $category = "Všetky";
        $url_link_new = '/products_new';
        $url_link_cheap = '/products_cheap';
        $url_link_luxury = '/products_luxury';
        $url_link = '/products';

        return view('ItemsPageLuxury')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function filter(Request $request)
    {
        //TODO add to database material and colour
        if(!$request->colour){
            $request->colour = ['cervena', 'modra', 'zlta', 'biela'];
        }
        if(!$request->material){
            $request->material = ['kov', 'plast', 'drevo', 'koza'];
        }
        if(!$request->low_price){
            $request->low_price = 0;
        }
        if(!$request->high_price){
            $request->high_price = PHP_INT_MAX;
        }
        $itemslist = Product::whereBetween('price', [$request->low_price, $request->high_price])
                                ->whereIn('material', $request->material)
                                ->whereIn('colour', $request->colour)
                                ->paginate(8);

        $category = "Všetky";
        $url_link_new = '/products_new';
        $url_link_cheap = '/products_cheap';
        $url_link_luxury = '/products_luxury';
        $url_link = '/products';

        return view('ItemsPage')->with('itemslist', $itemslist)
                                ->with('category',$category)
                                ->with('url_link_new', $url_link_new)
                                ->with('url_link_cheap', $url_link_cheap)
                                ->with('url_link_luxury', $url_link_luxury)
                                ->with('url_link', $url_link);
    }

    public function post_recension($id, Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        Message::create(['product_id' =>  $id, 'author' => Auth::user()->name, 'text' => $request->text]);
        return redirect("/products/$id");
    }
}
