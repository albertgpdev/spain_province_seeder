<?php

namespace Albertgpdev\SpainProvinceSeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Province extends Model
{
    protected $table = "provinces";
    protected $fillable = [
        'id',
        'slug',
        'name',
        'state_id',
        'capital_city_id'
    ];

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class, 'capital_city_id');
    }

    public function state() : BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
