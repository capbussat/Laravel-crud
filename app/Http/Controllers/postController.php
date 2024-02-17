<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post; /* required to get data of post eloquent model */

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
        // llegir les dades
        $posts = post::all();
        $count = count( $posts);

        // load the view and pass the posts
        return View('posts.index')->with('posts', $posts)->with('count', $count);
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
        $post = new Post;
        $post->summary = $request->summary;
        $post->type = $request->type;
        $post->status = $request->status;
         $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.create')->with('status', $post->summary);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where( 'id' , $id )->first();
        return view('posts.show')->with( compact( 'post' ) );
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
        $post->summary = $request->summary;
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
