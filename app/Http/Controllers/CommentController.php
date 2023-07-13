<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentStore(Request $request){

        //dd($request->all());

        Comment::create([

            "comment"=>$request->comment

        ]);
        return back();
    }
}
