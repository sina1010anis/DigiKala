<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title_filter extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps= false;
    public function sub_menus(){
        return $this->belongsTo(sub_all_menu::class);
    }
}
