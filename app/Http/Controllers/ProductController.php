<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Tag;


class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function main()
    {
        if (request('tag')) {
            $products = Tag::where('name', request('tag'))->firstOrFail()->products;
        } else {
            $products = Product::latest()->get();
        }

        return view('products.main', ['products' => $products]);
    }

}
