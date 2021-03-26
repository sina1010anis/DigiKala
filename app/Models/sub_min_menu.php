<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_min_menu extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function min_menus(){
        return $this->belongsTo(min_menu::class);
    }
    public $timestamps = false;
}
