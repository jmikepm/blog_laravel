<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;

class SiteController extends Controller
{
    public function site() {
        $posts = Post::orderBy('id', 'DESC')->where('status','PUBLISHED')->paginate(3); //
       return view('web.index', compact('posts'));
    }

   
}