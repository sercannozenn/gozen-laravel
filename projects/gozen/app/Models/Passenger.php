<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    // protected $table = "yolculars";



    public function getNameAttribute(): string
    {
        return $this->ad;
    }
}
