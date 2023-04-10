<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $comment = new Comment();
        $comment->blog_id = $blog->id;
        $comment->user_id = Auth::id();

        if ($request->has('parent_id')) {
            $comment->parent_id = $request->parent_id;
        }

        $comment->content = $request->comment;
        $comment->save();
        return back()->withSuccess('Comment Added Successfully');
    }
}
