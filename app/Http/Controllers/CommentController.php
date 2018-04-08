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

        foreach($comments as $comment){
            $comment->count = Comment::where('comment_id', '=', $comment->id)->count();
        }

        return $comments;
    }

//    public function addSubComment(Request $request){
//
//        $input = $request->except('_token');
//
//        $comment = new Comment();
//
//        $comment->fill($input);
//
//        if ($comment->save()) {
//
//            $message = "SubComment was saved!";
//
//            return $message;
//        }
//    }

    public function getSubComments(Request $request){

        $comment_id = $request->id;

        $comments = Comment::where('comment_id', '=', $comment_id)->get();

        return $comments;
    }

}
