<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'status',
        'country_id'
    ];

    /**
     * @return BelongsTo
     */
    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
