<?php

namespace App\Http\Controllers;

use App\Name;
use Illuminate\Http\Request;

class namesController extends Controller
{

    public function index(){

        $names = Name::orderBy('title')->paginate(100);
        return response()->json([
            'status'=>true,
            'message'=>"Names retrieved successfully",
            'data'=>$names
        ]);

    }


    public function recentnames(){

        $names = Name::orderBy('id','desc')->limit(5)->get();
        return response()->json([
            'status'=>true,
            'message'=>"Names retrieved successfully",
            'data'=>$names
        ]);

    }


    public function upvoted(){
        $names = Name::orderBy('upvates','desc')->paginate(100);
    }



}
