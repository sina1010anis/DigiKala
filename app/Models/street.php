<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class street extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function citys()
    {
        return $this->belongsTo(city::class , 'city_id' , 'id');
    }

    public $timestamps = false;
}
