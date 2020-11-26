<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($slug){
        $product = Product::where('slug', $slug)->first();
        return view('products.show', ['product' => $product]) ;
    }

    public function index(){
        $products = DB::table('products')->latest()->get();
        return view('products.index', ['products' => $products] );
    }

}
