<?php

namespace Albertgpdev\SpainProvinceSeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $table = "states";
    protected $fillable = [
        'id',
        'slug',
        'name',
        'country_id',
        'capital_city_id'
    ];

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class, 'capital_city_id');
    }

    public function provinces() : HasMany
    {
        return $this->hasMany(Province::class, 'state_id');
    }
}
