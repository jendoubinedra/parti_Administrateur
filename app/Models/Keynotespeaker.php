<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keynotespeaker extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','description','website'];
}
