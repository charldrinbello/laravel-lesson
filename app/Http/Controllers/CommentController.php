<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // This method might be used to show all comments, but it's not implemented in your provided code.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(), // Assumes the user is authenticated
            'comment' => $request->content, // Change 'content' to 'comment'
        ]);
        
        return back()->with('success', 'Comment added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:250', // Change to 'content'
        ]);
    
        // Create the comment
        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'comment' => $request->content, // Change to 'content'
        ]);
    
        // Redirect back to the post with a success message
        return back()->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        // This method might be used to show a single comment, but it's not implemented in your provided code.
    }

    // Other methods omitted for brevity...
}
