<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function commentStore(Request $request){

        //dd($request->all());

        $validator= Validator::make($request->all(),[

            'comment'=>'required|string',

        ]);

                if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
        }

        Comment::create([

            "comment"=>$request->comment

        ]);
        return back();
    }
}
