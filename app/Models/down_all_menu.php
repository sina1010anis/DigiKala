<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class down_all_menu extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function products(){
        return $this->hasMany(product::class);
    }
    public function sub_all_menus(){
        return $this->belongsTo(sub_all_menu::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public $timestamps = false;
}
