<?php


namespace App\Repository\Core;


abstract class Tools
{
    public function back($msg)
    {
        return back()->with('msg' ,  $msg);
    }
    public function backTo($url , $msg)
    {
        return redirect($url)->with('msg' , $msg);
    }
}
