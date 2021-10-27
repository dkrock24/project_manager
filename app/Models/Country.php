<?php

namespace App\Models;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactosry;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'flag',
        'status',
        'currency_id'
    ];

    public function currencies()
    {
        return $this->belongsTo(Currency::class);
    }
}
