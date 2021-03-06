<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('q')) {
            $q = $request->q;
            $posts = Post::where('title', 'like', '%'.$q.'%')->orderBy('id', 'desc')->paginate(1);
        } else {
            $posts = Post::orderBy('id', 'desc')->paginate(1);
        }
        
        return view('index', ['posts'=>$posts]);
    }

    // Post Detail
    public function detail(Request $request, $slug,  $postId)
    {
        $detail = Post::find($postId);
        return view('detail', ['detail' => $detail]);
    }
}
