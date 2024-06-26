<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    protected $guarded = [];
    protected $casts = [];
    protected $appends = [];

    public function cities() { return $this->hasMany(City::class); }
}
