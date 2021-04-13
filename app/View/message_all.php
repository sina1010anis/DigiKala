<?php


namespace App\View;


use App\Models\message;

class message_all
{
    public function compose(\Illuminate\View\View $view)
    {
        if (auth()->check()) {
            return $view->with('message_all', message::orderBy('id', 'desc')->whereUser_id(auth()->user()->id)->get());
        }
    }
}
