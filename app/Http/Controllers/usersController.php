<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function recentPeople(){

        $people = User::orderBy('id','desc')->limit(5)->get();

        return response()->json([
            'status'=>true,
            'message'=>'People retrieved',
            'data'=>$people
        ]);

    }
}
