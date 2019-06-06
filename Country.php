<?php

namespace Albertgpdev\SpainProvinceSeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $table = "countries";
    protected $fillable = [
        'id',
        'slug',
        'name',
        'demonym',
        'iso_code'
    ];

    public function states() : HasMany
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
