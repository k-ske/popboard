<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller

{
    public function index(){
        $posts = Post::all();
        return view("home", ["posts"=>$posts]);
    }
    
    public function addPost(){
        $nickname = isset($_POST["nickname"]) ? $_POST["nickname"]: "";
        $comment = isset($_POST["comment"]) ? $_POST["comment"]: "";

        $p = new Post();
        
        $p->nickname = $nickname;
        $p->comment = $comment;
        $p->save();

        return redirect("/");
    }


}
