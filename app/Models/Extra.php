<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
   protected $table = 'extra_pro';
	protected $primaryKey = 'id_extra';
	
    protected $fillable = [
        'descriptif', 'type', 'id_extra'
    ];
}
