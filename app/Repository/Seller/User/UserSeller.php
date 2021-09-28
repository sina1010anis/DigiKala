<?php


namespace App\Repository\Seller\User;


use App\Models\User;
use App\Repository\Auth\AuthSeller;

class UserSeller
{
    public function find($id)
    {
        return User::find($id);
    }
}
