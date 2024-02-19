<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class commentController extends Controller
{

	public function store(Request $request, $post_id)
	{
		$comment = new Comment;
		$comment->title = $request->title;
		$comment->content = $request->content;
		$comment->post_id = $post_id;
		$comment->save();

		return back(); // return same page
	}

	public function destroy( $id ) {
		
		$comment = Comment::where( 'id', $id)->get()->first();
		$comment->delete();
		return back();

	}
}
