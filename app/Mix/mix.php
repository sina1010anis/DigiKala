<?php


namespace App\Mix;


class mix
{
    public function ok()
    {
        return function ($test){
            echo $test;
        };
    }
}
