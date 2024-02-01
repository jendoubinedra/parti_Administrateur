<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialsession extends Model
{
    use HasFactory;
    protected $fillable=['title','description','order'];


    public function author(){
        return $this ->hasMany(Author::class,'id','id_special');
    }
}
