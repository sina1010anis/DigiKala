<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title_filter extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps= false;
    public function all_menus(){
        return $this->belongsTo(all_menu::class);
    }
}
