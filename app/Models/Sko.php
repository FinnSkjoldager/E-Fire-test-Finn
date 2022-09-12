<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sko extends Model
{
    protected $table = 'sko';
    use HasFactory;
    protected $fillable = [
        'beskrivelse',
        'storrelse',
        'farve',
        'pris',
        'antal'
    ];
 }
