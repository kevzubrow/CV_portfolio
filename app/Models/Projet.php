<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projet';
	protected $primaryKey = 'id_projet';
	
    protected $fillable = [
        'titre_projet', 'text', 'date', 'image'
    ];
}
