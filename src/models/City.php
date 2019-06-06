<?php

namespace Albertgpdev\SpainProvinceSeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $table = "cities";
    protected $fillable = [
        'id',
        'slug',
        'name',
        'province_id',
        'latitude',
        'longitude',
    ];

    public function province() : BelongsTo
    {
        return $this->belongsTo(Province::class, 'capital_city_id');
    }

    public function state() : BelongsTo
    {
        return $this->belongsTo(State::class, 'capital_city_id');
    }
}
