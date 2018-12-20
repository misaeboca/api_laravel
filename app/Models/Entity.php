<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'entity';
    protected $primaryKey = 'entity_id';
    
    protected $fillable = ['entity_name', 'entity_lastname', 'entity_email', 
                           'entity_birth_date', 'entity_gender','entity_address',
                           'entity_phone', 'workplace_id','entity_salary',
                           'entity_typeofcontract','entity_identity'];
}
