<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id = null){
        if($id == null) {
            return categories::orderby('ten_loai_san_pham', 'asc')->get();
        }else{
            return categories::find($id);
        };
    }
}
