<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function citys()
    {
        return $this->belongsTo(city::class , 'city_id' , 'id');
    }

    public function streets()
    {
        return $this->belongsTo(street::class , 'street_id' , 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public $timestamps = false;
}
