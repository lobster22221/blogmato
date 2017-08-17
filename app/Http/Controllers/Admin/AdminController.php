<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.index');
    }
    
     public function posts()
    {
         $posts = Post::where('user_id', auth()->id())->get();
       
        //dd( $posts);
        return view('pages.admin.posts.viewposts', ['posts' => $posts]);
       
    }
    
    public function postEdit($id)
    {
         // get the nerd
        $post = Post::find($id);

        // show the edit form and pass the nerd
        return view('pages.admin.posts.EditPost', ['post' => $post, 'id' => $id]);
    }
}
