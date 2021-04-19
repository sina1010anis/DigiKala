<?php


namespace App\Repository;


use App\DB\Create\create_user;
use Illuminate\Http\Request;

class repository_user
{
    public $create_user;
    public function __construct(create_user $create_user)
    {
        $this->create_user = $create_user;
    }

    public function newAddress(Request $request)
    {
        $this->create_user->address($request);
    }

    public function setAddress(Request $request)
    {
        if ($request->ajax()){
            $this->create_user->update_address($request->id);
        }
    }
    public function editName(Request $request)
    {
        return $this->create_user->edit_name($request);
    }
    public function editEmail(Request $request)
    {
        return $this->create_user->edit_email($request);
    }
    public function editMobile(Request $request)
    {
        return $this->create_user->edit_mobile($request);
    }

    public function editCode(Request $request)
    {
        return $this->create_user->edit_code($request);

    }

    public function editPassword(Request $request)
    {
        return $this->create_user->edit_password($request);

    }
    public function buyProduct()
    {
        return $this->create_user->buy_product();
    }

    public function bank()
    {
        return $this->create_user->bank();
    }

    public function bankVerify()
    {
        return $this->create_user->bank_verify();
    }
}
