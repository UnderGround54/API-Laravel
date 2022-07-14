<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $fillable = [
        'province_id',
        'libelle_reg',
        'code_reg',
    ];
    public $timestamps = false;
}
