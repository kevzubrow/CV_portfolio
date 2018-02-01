<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    protected $table = 'connexion';
	protected $primaryKey = 'id_co';
	
    protected $fillable = [
        'user_name', 'email', 'password',
    ];
}
