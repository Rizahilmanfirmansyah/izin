<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    use HasFactory;
    protected $table = "tblcuti";
    protected $fillable = [
        "nama","awalcuti","akhircuti","ket"

    ];
}
