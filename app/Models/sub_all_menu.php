<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_all_menu extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function sub_all_menus(){
        return $this->belongsTo(sub_all_menu::class ,'all_menu_id' ,'id');
    }

    public $timestamps =false;
}