<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index(){
        $Category = Categories::all()->sortBy('category_name');
        return view('categories.index', ['categories' => $Category  ]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'category_description' => 'required',
            'product_manager' => 'required',
            
        ]);

        $newCategories = Categories::create($data);

        return redirect(route('categories.index'));


    }

    public function edit(Categories $category){
        return view('categories.edit', ['categories' => $category]);
    }

    public function update(Categories $Category, Request $request){
        $data = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
            'product_manager' => 'required',
        ]);

        $Category->update($data);
        return redirect(route('categories.index'))-> with('success', 'Product Updated');
    }
}
