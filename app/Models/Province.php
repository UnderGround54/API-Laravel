<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';
    protected $fillable = [
        'libelle_prov',
        'code_prov',
    ];
    public $timestamps = false;
}
