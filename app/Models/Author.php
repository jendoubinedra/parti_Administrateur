<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','organism','id_special','id_countries'];

    public function special(){
        return $this->belongsTo(Specialsession::class,'id_special','id');
    }

    public function countrie(){
        return $this->belongsTo(Countrie::class,'id_countries','id');
    }

}


