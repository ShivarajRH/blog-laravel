<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use Carbon\Carbon;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {
        //return session('message');

        /*// calling repository - 
        //use App\Repositories\Posts;
        //index(Posts $posts)

        //$posts = $posts->all();*/

        $posts = Post::latest()
                    ->filter( request(['month', 'year']) )
                    ->get();
        
        return view('posts.index',compact('posts'));
    }
    

    public function show(Post $post)//$postid
    {
        //$post=Post::getItem($postid);
        
        return view('posts.show',['post'=>$post]);
    }
    

    public function create()
    {
        return view("posts.create");
    }
    

    public function store()
    {
        
        $this->validate(request(), [
                'title' => 'required|min:3',
                'body' => 'required|min:5'
            ]);

        
        auth()->user()->publish( 
                new Post(request([
                    'title','body','ispublish'
                ]
            ))
        );

        session()->flash('message', 'Your post has been published now');
        

        // Post::create([
        //         'title' => request('title'),
        //         'body' => request('body'),
        //         'ispublish' =>request('ispublish'),
        //         'user_id' => auth()->user()->id // auth()->id()
        //     ]);

        return redirect('/');
    }
}
