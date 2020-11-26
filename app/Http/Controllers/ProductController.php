<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;

//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show(Product $product){
//        dd($product);
        return view('products.show', ['product' => $product]) ;
    }

    public function index(){
        if (request('tag')) {
            $products = Tag::where('name', request('tag'))->firstOrFail()->products;
        } else {
            $products = Product::latest()->get();
        }

        return view('products.index', ['products' => $products] );
    }

}
