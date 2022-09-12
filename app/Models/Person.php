<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; 

class Person extends Model
{
    protected $table = 'person';
    use HasFactory;
    protected $fillable = [
        'navn',
        'adresse',
        'telefonnr',
    ];
    public function personsko(): BelongsToMany
    {
        return $this->belongsToMany(Sko::class, 'personsko', 'person_id', 'sko_id');
    }
}
