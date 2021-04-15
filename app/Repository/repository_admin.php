<?php


namespace App\Repository;


use App\Models\address;

class repository_admin
{
    public function deleteAddress($data){
        address::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
}
