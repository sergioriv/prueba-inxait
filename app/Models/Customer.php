<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $casts = [];
    protected $appends = ['full_name'];

    public function city() { return $this->belongsTo(City::class); }

    public function getFullNameAttribute() : string { return \Str::squish("{$this->name} {$this->last_name}"); }

    public function winner() { return $this->hasOne(Winner::class); }
}
