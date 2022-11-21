<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($id = null) {
        if($id == null) {
            return Product::orderby('ten_san_pham', 'asc')->get();
        }else{
            return Product::find($id);
        };
    }
}
