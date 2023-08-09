<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('Products.index', ['products' => $products  ]);
    }

    public function create(){
        return view('Products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'product_name' => 'required',
            'product_SKU' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required'   
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));


    }

    public function edit(Product $product){
        return view('products.edit', ['products' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'product_name' => 'required',
            'product_SKU' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required'   
        ]);

        $product->update($data);
        return redirect(route('product.index'))-> with('success', 'Product Updated');
    }
}
