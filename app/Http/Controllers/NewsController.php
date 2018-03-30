<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;

class NewsController extends Controller
{
    public function addNews(Request $request){

//        dd($request);

        $input = $request->except('_token');

        $new_item = new News();

        $new_item->fill($input);

        if ($new_item->save()) {

            $message = "News was saved!";

            return $message;
        }
    }

    public function getNews(){

        $news = News::all();

         foreach($news as $new){
            $new->count = News::find($new->id)->comments->count();
        }

        return $news;
    }

    public function editNews(Request $request){

    }
}
