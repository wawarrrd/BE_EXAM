<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $products = DB::table('products')->paginate(5);
        return view('Dashboard.index', ['products' => $products  ]);
    }

   
}
