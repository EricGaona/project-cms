<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerias extends Model
{
    use HasFactory;
    protected $table = 'galeria';
    protected $fillable = ['excursion_id','imagen'];
    public $timestamps = false;
}
