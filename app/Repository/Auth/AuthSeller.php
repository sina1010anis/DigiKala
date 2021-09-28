<?php


namespace App\Repository\Auth;


abstract class AuthSeller
{
    public $check_status = false;
    public function auth_check(){
        (auth()->check()) ? $this->check_status =true : $this->check_status = false;
        return $this;
    }

    public function auth_seller()
    {
        (auth()->user()->action == 2 && $this->check_status) ? $this->check_status =true : $this->check_status = false;
        return $this;
    }
}
