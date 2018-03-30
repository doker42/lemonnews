<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\News;

class EventsController extends Controller
{
    public function addEvent(Request $request){

        $mes = "test mes";
        return $mes;

//        $input = $request->except('_token');
//
//        $event = new News();
//
//        $event->fill($input);
//
//        if ($event->save()) {
//
//            $message = "Event was saved!";
//
//            return $message;
//        }
    }
}
