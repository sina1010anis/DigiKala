<?php


namespace App\Repository;


use App\Models\address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function editName(Request $request)
    {
        $v = $request->validate([
            'name'=>'required'
        ]);
        User::whereId(auth()->user()->id)->update(['name'=>$request->name]);
        return back()->with('msg' , 'نام کاربری شما تغییر کرد');
    }
    public function editEmail(Request $request)
    {
        $v = $request->validate([
            'email'=>'required|email'
        ]);
        User::whereId(auth()->user()->id)->update(['email'=>$request->email]);
        auth()->logout();
        return redirect()->route('login');
    }
    public function editMobile(Request $request)
    {
        $v = $request->validate([
            'mobile'=>'required|min:11|max:11|'
        ]);
        User::whereId(auth()->user()->id)->update(['mobile'=>$request->mobile]);
        return back()->with('msg' , 'شماره موبایل شما تغییر کرد');
    }

    public function editCode(Request $request)
    {
        $v = $request->validate([
            'code'=>'required|min:10|max:10'
        ]);
        User::whereId(auth()->user()->id)->update(['code_m'=>$request->code]);
        return back()->with('msg' , 'کد ملی شما تغییر کرد');
    }

    public function editPassword(Request $request)
    {
        $v = $request->validate([
            'password'=>'required|min:8|max:20'
        ]);
        User::whereId(auth()->user()->id)->update(['password'=>Hash::make($request->password)]);
        auth()->logout();
        return redirect()->route('login');
    }
}
