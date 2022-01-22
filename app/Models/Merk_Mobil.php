<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk_Mobil extends Model
{
    use HasFactory;
    protected $table = 'merk_mobil';
    protected $guarded = ['id'];
}
