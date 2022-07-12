<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======
    protected $table = 'provinces';
    protected $fillable = [
        'libelle_prov',
        'code_prov',
    ];
    public $timestamps = false;
>>>>>>> Stashed changes
}
