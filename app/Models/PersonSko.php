<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonSko extends Model
{
    protected $table = 'personsko';
    use HasFactory;
    protected $fillable = [
        'person_id',
        'sko_id',
    ];
}
