<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'formu_contact';
	protected $primaryKey = 'id_contact';
	
    protected $fillable = [
        'nom', 'prenom', 'mail', 'sujet', 'message'
    ];
}
