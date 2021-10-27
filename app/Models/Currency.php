<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'simbol',
        'status'
    ];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
