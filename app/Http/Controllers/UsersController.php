<?php

namespace App\Http\Controllers;

use App\Models\usersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(usersModel $c = null){
        if($c == null){
            return usersModel::get();
        }else {
            return $c;
        }
    }
}
