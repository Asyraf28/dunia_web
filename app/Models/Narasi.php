<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narasi extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'narasi';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'narasi'];
}