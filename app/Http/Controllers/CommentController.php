<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request){

        $input = $request->except('_token');

        $comment = new Comment();

        $comment->fill($input);

        if ($comment->save()) {

            $message = "Comment was saved!";

            return $message;
        }
    }

    public function getComments(Request $request){

        $article_id = $request->id;

        $comments = Comment::where('article_id', '=', $article_id)->get();

        return $comments;
    }


}
