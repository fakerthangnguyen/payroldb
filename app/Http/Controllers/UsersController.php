<?php

namespace App\Http\Controllers;

use App\Models\usersModel;
use Illuminate\Http\Request;
use Throwable;

class UsersController extends Controller
{
    public function index(usersModel $c = null){
        if($c == null){
            return usersModel::get();
        }else {
            return $c;
        }
    }
    public function create(Request $request){
        try{
            $user = new usersModel();
           $user->User_ID = $request->input('User_ID');
           $user->User_Name = $request->input('User_Name');
           $user->Password = $request->input('Password');
           $user->Email = $request->input('Email');
           $user->Active = $request->input('Active');
           $user->save();
           return $user;
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }
    public function update($c, Request $request){
        try{
            $user =  usersModel::find($c);
            if($user){
                $user->User_ID = $request->input('User_ID');
                $user->User_Name = $request->input('User_Name');
                $user->Password = $request->input('Password');
                $user->Email = $request->input('Email');
                $user->Active = $request->input('Active');
                $user->save();
                return $user;
            }else{
                return 'Data not found';
            }

        }catch(Throwable $err){
            return $err->getMessage();
        }
    }

    public function delete($c){
        try{
            $user = usersModel::find($c);
            if($user){
                $user->delete();
                return $user;
            }else {
                return 'Data not found';
            }
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }
}
