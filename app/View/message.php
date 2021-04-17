<?php


namespace App\View;


class message
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('messages_admin' , \App\Models\message::orderBy('id' , 'desc')->paginate(10));
    }
}
