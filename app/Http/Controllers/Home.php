<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Home extends Controller
{
    public function insertCat(Request $req){
    $req->validate([
        'cat_title'=>'required | max:10 |min:2'
    ]);
    echo 'validated <br>' .$req->cat_title;
    }
    public function insertPost(Request $req){
    $req->validate([
        'title'=>'required',
        'author'=>'required',
        'category'=>'required',
        'post'=>'required',
    ]);
    \App\Models\Post::create([
        'title'=>$req->title,
        'author'=>$req->author,
        'category'=>$req->category,
        'post'=>$req->post,
    ]);
    return redirect()->back();
    }
}
