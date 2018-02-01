<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experience_pro';
	
    protected $fillable = [
        'date_debut', 'date_fin', 'nom_entreprise', 'description','id_entreprise',
    ];
}
