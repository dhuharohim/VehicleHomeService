<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Mobil extends Model
{
    use HasFactory;
    protected $table = 'model_mobil';
    protected $guarded = ['id'];
}
