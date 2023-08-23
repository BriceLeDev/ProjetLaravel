<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;

class blogControle extends Controller
{
    public function index(){


         return view('test',[
             'post'=> \App\Models\Posts::paginate(1)
         ]);
    }
    public function show(String $slug , String $id){
        $post = Posts::findOrFail($id);
        if ($post->id==$id){
            return to_route('show',['slug'=>$post->slug,'id'=>$post->id]);
        }

        return view('showArticle',[
            'post'=>$post
        ]);
    }
}
