<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post; /* required to get data of post eloquent model */
use App\Models\Comment;


class postController extends Controller
{

    /* Use it for mass assignment */
    private $fillable = [

    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // si hi ha una cerca per títol només recupera la cerca
        if ( request()->has('search') ){
            $posts = Post::where('title', 'like', '%' . request('search') . '%' )->get();
        } else {
            // o llegeix totes les dades
            $posts = Post::all();
        }

        // passa un missatge si el resultat és buit
        $count = count( $posts);
        if ( $count === 0 ) {
            return view('posts.index')->with('status', 'No hi ha dades');
        }

        // passa el resultat
        return view('posts.index')->with('posts', $posts)->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* validació de camps */
        $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        ]);
        
        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->type = $request->type;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('posts.create')->with('status', $post->title);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where( 'id' , $id )->first();
        $comments = Post::find( $id )->comments; 
        return view('posts.show')->with( compact( 'post', 'comments' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where( 'id' , $id )->first();
        return view('posts.edit', compact( 'post' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::where( 'id' , $id )->first();
        $post->title = $request->title;
        $post->type = $request->type;
        $post->status = $request->status;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index')->with('status', 'Post updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::all()->where( 'id' , $id)->first();
        $post->delete();
        return back(); // return same page
    }
}
