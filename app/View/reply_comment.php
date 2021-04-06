<?php


namespace App\View;


class reply_comment
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('reply_comments' , \App\Models\reply_comment::orderBy('id' , 'DESC')->get());
    }
}
