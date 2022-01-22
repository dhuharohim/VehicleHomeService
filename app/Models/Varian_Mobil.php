<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian_Mobil extends Model
{
    use HasFactory;
    protected $table = 'varian_mobil';
    protected $guarded = ['id'];
}
