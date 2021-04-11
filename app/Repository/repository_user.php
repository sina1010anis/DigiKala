<?php


namespace App\Repository;


use App\Models\address;
use App\Models\User;
use Illuminate\Http\Request;

class repository_user
{
    public function newAddress(Request $request)
    {
        $v = $request->validate([
            'city_id'=>'required',
            'street_id'=>'required',
            'address'=>'required|min:10|max:50',
        ]);
        $address = new address();
        $address->city_id = $request->city_id;
        $address->street_id = $request->street_id;
        $address->address = $request->address;
        $address->user_id = auth()->user()->id;
        $address->save();
    }

    public function setAddress(Request $request)
    {
        if ($request->ajax()){
            User::whereId(auth()->user()->id)->update(['address_id' => $request->id]);
            return 'ok';
        }
    }
}
