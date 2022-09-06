<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{

    protected $table = 'estoque';
    #protected $fillable = ['titulo', 'message'];

    use HasFactory;
}
