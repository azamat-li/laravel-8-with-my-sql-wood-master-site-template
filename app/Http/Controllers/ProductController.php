<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($slug){
        $product = DB::table('products') ->where('slug', $slug)->first();
        return view('product', ['product' => $product]) ;
    }

    public function index(){
        $products = DB::table('products')->latest()->take(4)->get();
        return view('products', ['products' => $products] );
    }
}
